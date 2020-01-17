<?php

namespace app\controllers;

use app\models\Files;
use app\models\ImportForm;
use app\models\UploadForm;
use app\models\UserComment;
use Yii;
use yii\web\Controller;
use app\models\Startup;
use app\models\StartupForm;
use app\models\User;
use app\models\Dic_Industries;
use app\models\Dic_Devstages;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use ZipArchive;

class ContestController extends Controller
{
    /**
     * Show new startup form
     *
     * @param null|string $uuid
     * @return string
     */
    public function actionIndex(?string $uuid = null)
    {
        $userId = Yii::$app->request->get('user');
        $user = null;

        if (!empty($uuid)) {
            $user = User::findOne(['uuid' => $uuid]);
        } elseif (!empty($userId)) {
            $user = User::findOne($userId);
        }

        $model = new StartupForm();

        $dictionaryIndustries = Dic_Industries::find()->all();
        $dictionaryDevstages = Dic_Devstages::find()->orderBy('id')->all();

        return $this->render('acceptance_form', [
            'model' => $model,
            'user' => $user,
            'dictionary_industries' => $dictionaryIndustries,
            'dictionary_devstages' => $dictionaryDevstages
        ]);
    }

    public function actionSaveform()
    {
        $form = new StartupForm();

        $requestData = Yii::$app->request->post();

        if ($requestData['StartupForm']['email1'] != '') {
            $response = array();

            $response['status'] = true;
            $response['message'] = "Thank you for your submission!  Please check your email for confirmation and additional information.";

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $response;
        }

        $form->load(\Yii::$app->request->post());

        $response = array();

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if ($form->validate()) {
            $startup = new Startup();
            $startup->status = Startup::STATUS_APPLIED;

            // create new user
            if (empty($form->user_id)) {
                $user = new User();
                $user->subject = User::Entrepreneur_STARTUP;
                $user->load($form->attributes, '');
                $user->save();
                $form->user_id = $user->id;
            } else {
                $user = User::findOne($form->user_id);
            }

            $startup->load($form->attributes, '');
            if ($startup->save(false)) {
                $user->status = User::STATUS_APPLIED;
                if ($user->files) {
                    foreach ($user->files as $path => $name) {
                        $startup->saveFile($path);
                    }
                }
                $user->save();
                $startup->saveFiles($form);
                Yii::$app->activeCampaign->sendFundApplicationEmail($user);

                $response['status'] = true;
                $response['message'] = "Thank you for your submission!  Please check your email for confirmation and additional information.";
                return $response;
            } else {
                $response['status'] = false;
                $response['message'] = "Sorry something went wrong.please try later.";
                return $response;
            }
        } else {
            $errors = $form->errors;
            $errorString = '';
            foreach($errors as $error) {
                $errorString .= $error[0] . ' ';
            }

            $response['status'] = false;

            if($errorString)
                $response['message'] = $errorString;
            else
                $response['message'] = "Something went wrong. Can you check if you input right info ?";

            return $response;
        }
    }

    public function actionStartupStatusUp()
    {
        if (Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $model = self::findModel($post['id']);
            if ($model->status < Startup::STATUS_SELECTED) {
                $model->status++;
            }
            return $model->save(false);
        } else {
            return false;
        }
    }

    public function actionNote($id){
        $startUp = self::findModel($id);
        $commentModel = new UserComment();
        return $this->renderAjax('note', compact('startUp','commentModel'));
    }

    public function actionStartupStatusDown()
    {
        if (Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $model = self::findModel($post['id']);
            $model->status = Startup::STATUS_DECLINED;

            return $model->save(false);
        } else {
            return false;
        }
    }


    /**
     * Add file to startup
     *
     * @param int $id
     * @return array
     */
    public function actionAddFile(int $id)
    {
        $startup = $this->findModel($id);
        $form = new UploadForm();
        $form->file = UploadedFile::getInstanceByName('startup-file');

        Yii::$app->response->format = Response::FORMAT_JSON;

        if ($form->file && $form->validate()) {
            if ($startup->addFile($form->file)) {
                return [
                    'status' => true,
                    'message' => 'File successfully uploaded!'
                ];
            }
        } else {
            $fileError = $form->firstErrors['file'];
            return [
                'status' => false,
                'message' => $fileError ?? "We unable to upload this file!"
            ];
        }
        return [
            'status' => false,
            'message' => 'Some error occurred!'
        ];
    }

    /**
     * Download archive with startups files
     *
     * @param int $id
     * @throws \Exception
     */
    public function actionDownloadFiles(int $id)
    {
        $startup = $this->findModel($id);
        $files = $startup->files;
        $fileName = $startup->name . '_' . time() . ".zip";

        $archive = new ZipArchive();

        if ($archive->open($fileName, ZipArchive::CREATE) !== TRUE) {
            throw new \Exception('Cannot create a zip file');
        }

        /** @var Files $file */
        foreach ($files as $file) {
            $archive->addFile($file->url, $file->name ?? $file->url);
        }

        if ($pitchdeck = $startup->pitchdeckFile) {
            $archive->addFile($pitchdeck->url, $pitchdeck->name ?? $pitchdeck->url);
        }

        $archive->close();

        if (file_exists($fileName)) {
            header('Content-type: application/zip');
            header('Content-Disposition: attachment; filename="' . $fileName . '"');
            readfile($fileName);
            unlink($fileName);
        }
    }

    /**
     * Import applied startups from csv
     *
     * @return \yii\web\Response
     */
    public function actionImport()
    {
        $model = new ImportForm();
        $successCount = 0;
        $errorCount = 0;

        $model->csvFile = UploadedFile::getInstanceByName('csvFile');

        if ($model->csvFile && $model->validate()) {
            $file = fopen($model->csvFile->tempName, "r");
            $firstTime = true;
            $db = Yii::$app->db;

            while (($line = fgetcsv($file, 1000, ",")) !== false) {
                if ($firstTime == true) {
                    $firstTime = false;
                    continue;
                }

                $transaction = $db->beginTransaction();

                try {
                    $user = new User([
                        'first_name' => $line[0],
                        'last_name' => $line[1],
                        'email' => $line[2],
                        'phone' => $line[3],
                        'subject' => User::Entrepreneur_STARTUP,
                    ]);
                    if (!$user->save()) {
                        dd($user->errors);
                    }
                    $industry = Dic_Industries::findOne(['name' => $line[13]]);
                    $devstage = Dic_Devstages::findOne(['name' => $line[14]]);

                    $startUp = new Startup([
                        'status' => Startup::STATUS_APPLIED,
                        'user_id' => $user->id,
                        'name' => $line[4],
                        'address' => $line[5],
                        'url' => $line[6],
                        'description' => $line[7],
                        'problem' => $line[8],
                        'business_model' => $line[9],
                        'age' => array_search($line[10], Startup::AGES),
                        'has_demo' => $line[11],
                        'demo_url' => $line[12],
                        'industry_id' => $industry ? $industry->id : null,
                        'devstage_id' => $devstage ? $devstage->id : null,
                        'funding' => array_search($line[15], Startup::FUNDING),
                        'people_count' => array_search($line[16], Startup::PEOPLE_COUNT),
                        'has_launched' => $line[17],
                        'has_paying' => $line[18],
                        'proofs' => $line[19],
                    ]);
                    if (!$startUp->save()) {
                        throw new \Exception("Startup has not saved!");
                    }
                    $successCount++;
                    $transaction->commit();
                } catch (\Throwable $e) {
                    $errorCount++;
                    $transaction->rollBack();
                }
            }
        } else {
            foreach ($model->errors as $error) {
                Yii::$app->session->setFlash('error', $error);
            }
        }

        if ($successCount > 0) {
            if ($errorCount === 0) {
                Yii::$app->session->setFlash('success', 'All rows imported successfully.');
            } else {
                Yii::$app->session->setFlash('info', $successCount . ' rows imported successfully and ' . $errorCount . ' rows failed.');
            }
        } elseif ($errorCount > 0) {
            Yii::$app->session->setFlash('error', 'Import failed.');
        }

        return $this->redirect('user');
    }

    /**
     * Export startups to csv
     *
     * @return string
     */
    public function actionExport()
    {
        $endLine = "\r\n";
        $separator = ',';
        $file = '';

        header("Content-Disposition: attachment; filename=startups.csv");

        $names = '';
        foreach (ImportForm::$columnNames as $columnName) {
            $names .= $columnName . $separator;
        }
        $names = rtrim($names, $separator);

        $file .= $names . $endLine;

        $startups = Startup::find()
            ->with(['devstage', 'industry', 'user'])
            ->all();

        /** @var Startup $startup */
        foreach ($startups as $startup) {
            $file .= $startup->id . $separator .
                $startup->user->first_name . $separator .
                $startup->user->last_name . $separator .
                $startup->user->email . $separator .
                $startup->user->phone . $separator .
                $startup->name . $separator .
                $startup->address . $separator .
                $startup->url . $separator .
                $startup->description . $separator .
                $startup->problem . $separator .
                $startup->business_model . $separator .
                (!empty($startup->age) ? Startup::AGES[$startup->age] : '') . $separator .
                $startup->has_demo . $separator .
                $startup->demo_url . $separator .
                $startup->industryName . $separator .
                $startup->devstageName . $separator .
                (!empty($startup->funding) ? Startup::FUNDING[$startup->funding] : '') . $separator .
                (!empty($startup->people_count) ? Startup::PEOPLE_COUNT[$startup->people_count] : '') . $separator .
                ($startup->has_launched > 0 ? 'Yes' : 'No'). $separator .
                ($startup->has_paying > 0 ? 'Yes' : 'No'). $separator .
                $startup->proofs . $separator .
                (!empty($startup->status) ? Startup::STATUSES[$startup->status] : '') . $endLine;
        }

        return $file;
    }

    protected function findModel($id)
    {
        if (($model = Startup::findOne($id)) !== null) {
            return $model;
        } else {
            return new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
