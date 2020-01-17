<?php

namespace app\controllers;

use app\models\MailForm;
use app\models\Startup;
use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use app\models\UserComment;

/**
 * UserController implements the CRUD actions for Users model.
 */
class UserController extends Controller
{
    private $baseUrl;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {

        if (!Yii::$app->user->isGuest) {
            $userStartupsSearchModel = new \app\models\UserSearch();
            $newStartups = $userStartupsSearchModel->search(Yii::$app->request->queryParams, User::Entrepreneur_STARTUP);

            $applied = new ActiveDataProvider([
                'query' => Startup::find()->andFilterWhere(['status' => Startup::STATUS_APPLIED])->orderBy(['created_at' => SORT_DESC]),
                'sort' => false
            ]);
            $applied->setPagination(new Pagination([
                'pageSize' => Yii::$app->params['pageSize'],
                'pageParam' => 'applied-page'
            ]));
            $screening = new ActiveDataProvider([
                'query' => Startup::find()->andFilterWhere(['status' => Startup::STATUS_SCREENING])->orderBy(['created_at' => SORT_DESC]),
                'sort' => false
            ]);
            $screening->setPagination(new Pagination([
                'pageSize' => Yii::$app->params['pageSize'],
                'pageParam' => 'screening-page'
            ]));
            $interview = new ActiveDataProvider([
                'query' => Startup::find()->andFilterWhere(['status' => Startup::STATUS_INTERVIEWS])->orderBy(['created_at' => SORT_DESC]),
                'sort' => false
            ]);
            $interview->setPagination(new Pagination([
                'pageSize' => Yii::$app->params['pageSize'],
                'pageParam' => 'interview-page'
            ]));
            $selected = new ActiveDataProvider([
                'query' => Startup::find()->andFilterWhere(['status' => Startup::STATUS_SELECTED])->orderBy(['created_at' => SORT_DESC]),
                'sort' => false
            ]);
            $selected->setPagination(new Pagination([
                'pageSize' => Yii::$app->params['pageSize'],
                'pageParam' => 'selected-page'
            ]));
            $declined = new ActiveDataProvider([
                'query' => Startup::find()->andFilterWhere(['status' => Startup::STATUS_DECLINED])->orderBy(['created_at' => SORT_DESC]),
                'sort' => false
            ]);
            $declined->setPagination(new Pagination([
                'pageSize' => Yii::$app->params['pageSize'],
                'pageParam' => 'declined-page'
            ]));

            return $this->render('index', compact(
                'newStartups',
                'userStartupsSearchModel',
                'applied',
                'screening',
                'interview',
                'selected',
                'declined'
            ));
        } else {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function getErrorMessge($response) {
        $result = json_decode($response);
        $errorStr = '';
        if($result->description == 'Validation failed') {
            if($result->errors) {
                foreach($result->errors as $error) {
                    if($error->code == 'duplicate_value') {
                        $errorStr .= 'The ' . $error->field . ' that you have typed is already existed. ';
                    }
                }
            }
        }
        return $errorStr;
    }

    /** create company in fresh desk */
    protected function createCompany($name)
    {
        $result = array();
        $result['success'] = false;
        $result['value'] = '';

        $api_key = Yii::$app->params['freshdesk']['api_key'];
        $domain = Yii::$app->params['freshdesk']['domain'];
        $password = "x";

        $url = "https://$domain.freshdesk.com/api/v2/companies?per_page=90&page=1";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        $info = curl_getinfo($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $response = substr($server_output, $header_size);

        if ($info['http_code'] == 200) {
            $companies = json_decode($response);

            foreach ($companies as $company) {
                if ($company->name == $name) {
                    $result['success'] = true;
                    $result['value'] = $company->id;
                    return $result;
                }
            }

            $data = json_encode(array(
                "name" => $name,
            ));

            $url = "https://$domain.freshdesk.com/api/v2/companies";
            $ch = curl_init($url);
            $header[] = "Content-type: application/json";
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            $info = curl_getinfo($ch);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $response = substr($server_output, $header_size);

            if ($info['http_code'] == 201) {
                $company = json_decode($response);
                $result['success'] = true;
                $result['value'] = $company->id;
                return $result;
            } else {
                $result['success'] = false;
                $result['value'] = $this->getErrorMessge($response);
                return $result;
            }
        } else {
            $result['success'] = false;
            $result['value'] = $this->getErrorMessge($response);
            return $result;
        }
    }

    /** create contact in fresh desk */
    protected function createContact($name, $email, $phone, $company_id, $website)
    {
        $result = array();
        $result['success'] = false;
        $result['value'] = '';

        $api_key = Yii::$app->params['freshdesk']['api_key'];
        $domain = Yii::$app->params['freshdesk']['domain'];
        $password = "x";

        $url = "https://$domain.freshdesk.com/api/v2/contacts?email=$email";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        $info = curl_getinfo($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $response = substr($server_output, $header_size);

        if ($info['http_code'] == 200) {
            $contacts = json_decode($response);

            if (count($contacts) > 0) {
                $result['success'] = true;
                $result['value'] = $contacts[0]->email;
                return $result;
            }

            if($company_id) {
                $data = json_encode(array(
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "company_id" => $company_id,
                    "description" => $website
                ));
            } else {
                $data = json_encode(array(
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "description" => $website
                ));
            }

            $url = "https://$domain.freshdesk.com/api/v2/contacts";
            $ch = curl_init($url);
            $header[] = "Content-type: application/json";
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            $info = curl_getinfo($ch);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $response = substr($server_output, $header_size);

            if ($info['http_code'] == 201) {
                $contact = json_decode($response);
                $result['success'] = true;
                $result['value'] = $contact->email;
                return $result;
            } else {
                $result['success'] = false;
                $result['value'] = $this->getErrorMessge($response);
                return $result;
            }
        } else {
            $result['success'] = false;
            $result['value'] = $this->getErrorMessge($response);
            return $result;
        }
    }

    /** create ticket in fresh desk */
    protected function createTicket($name, $email, $phone, $subject, $message, $tag, $fileArray, $company, $website)
    {
        $result = [];
        $result['success'] = false;
        $result['value'] = '';

        $company_id = '';
        $contact_email = '';

        if($company) {
            $result1 = $this->createCompany($company);
            $company_id = $result1['value'];

            if (!$result1['success']) {
                $result['success'] = false;
                $result['value'] = $result1['value'];
                return $result;
            }
        }

        $result1 = $this->createContact($name, $email, $phone, $company_id, $website);
        $contact_email = $result1['value'];

        if (!$result1['success']) {
            $result['success'] = false;
            $result['value'] = $result1['value'];
            return $result;
        }

        $api_key = Yii::$app->params['freshdesk']['api_key'];
        $domain = Yii::$app->params['freshdesk']['domain'];
        $password = "x";

        $url = "https://$domain.freshdesk.com/api/v2/groups";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        $info = curl_getinfo($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $response = substr($server_output, $header_size);
        curl_close($ch);


        if ($info['http_code'] == 200) {
            $groups = json_decode($response);

            $group_id = 0;

            foreach ($groups as $group) {
                if (strtolower($group->name) == 'account managers') {
                    $group_id = $group->id;
                    break;
                }
            }

            if ($group_id == 0) {
                $group_id = $groups[0]->id;
            }

            $url = "https://$domain.freshdesk.com/api/v2/tickets";

            $eol = "\r\n";
            $mime_boundary = md5(time());

            $data = '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="email"' . $eol . $eol;
            $data .= $contact_email . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="subject"' . $eol . $eol;
            $data .= $subject . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="priority"' . $eol . $eol;
            $data .= "2" . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="status"' . $eol . $eol;
            $data .= "2" . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="description"' . $eol . $eol;
            $data .= $message . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="type"' . $eol . $eol;
            $data .= "Question" . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="group_id"' . $eol . $eol;
            $data .= $group_id . $eol;

            $data .= '--' . $mime_boundary . $eol;
            $data .= 'Content-Disposition: form-data; name="tags[]"' . $eol . $eol;
            $data .= $tag . $eol;

            foreach ($fileArray as $fieObj) {
                $data .= '--' . $mime_boundary . $eol;
                $data .= 'Content-Disposition: form-data; name="attachments[]"; filename="' . $fieObj['name'] . '"' . $eol;
                $data .= "Content-Type: " . $fieObj['type'] . $eol . $eol;
                $data .= file_get_contents($fieObj['path']) . $eol;
            }

            $data .= "--" . $mime_boundary . "--" . $eol . $eol;
            $header[] = "Content-type: multipart/form-data; boundary=" . $mime_boundary;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            $info = curl_getinfo($ch);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $response = substr($server_output, $header_size);
            curl_close($ch);

            if ($info['http_code'] == 201) {
                $result['success'] = true;
                $result['value'] = '';
                return $result;
            } else {
                $result['success'] = false;
                $result['value'] = $this->getErrorMessge($response);
                return $result;
            }
        } else {
            $result['success'] = false;
            $result['value'] = $this->getErrorMessge($response);
            return $result;
        }
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws \yii\base\Exception
     */
    public function actionCreate()
    {
        $model = new User();
        $requestData = Yii::$app->request->post();
        $actionId = $requestData['User']['requestFrom'];


        if ($requestData['User']['email1'] != '') {
            $response = array();
            $response['status'] = true;
            $response['message'] = "Thank you for your submission!  Please check your email for confirmation and additional information.";
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $response;
        }

        if ($model->load($requestData)) {
            $response = array();

//            if ($model->subject == USER::Entrepreneur_STARTUP) {
//                if ($model->validate()) {
//                    $model->image = UploadedFile::getInstances($model, 'image');
//                    if ($model->image) {
//                        $image_src_filename = $image_web_filename = array();
//
//                        foreach ($model->image as $fimageile) {
//                            $_src_filename = $fimageile->name;
//                            $_web_filename = Yii::$app->security->generateRandomString() . ".{$fimageile->extension}";
//
//                            Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
//                            $path = Yii::$app->params['uploadPath'] . $_web_filename;
//
//                            array_push($image_src_filename, $_src_filename);
//                            array_push($image_web_filename, $_web_filename);
//
//                            $fimageile->saveAs($path, false);
//                        }
//                        $model->image_src_filename = json_encode($image_src_filename);
//                        $model->image_web_filename = json_encode($image_web_filename);
//                    }
//                    $model->uuid = Yii::$app->security->generateRandomString();
//                    if ($model->save(false)) {
//                        Yii::$app->activeCampaign->sendWelcomeEmail($model);
//                        $response['status'] = true;
//                        $response['message'] = "Thank you for contacting us, we will be in touch soon.";
//                    } else {
//                        $response['status'] = false;
//                        $response['message'] = "Sorry something went wrong.please try later.";
//                    }
//                } else {
//                    $response['status'] = false;
//                    $err_message = '';
//
//                    foreach ($model->errors as $err) {
//                        foreach ($err as $e) {
//                            $err_message .= $e;
//                        }
//                    }
//
//                    $response['message'] = $err_message;
//                }
//            } else {
            $first_name = $model->first_name;
            $last_name = $model->last_name;
            $email = $model->email;
            $phone = $model->phone;
            $tag = $model->subject;
            $message = $model->message;
            $company = $model->company;
            $website = $model->website;

            $subject = "Public Submission - " . $requestData['User']['page'];
            $file_array = [];

            $uploadFiles = UploadedFile::getInstances($model, 'image');
            if ($uploadFiles) {
                foreach ($uploadFiles as $uploadFile) {
                    $file_obj = [];

                    $path = Yii::$app->basePath . '/web/uploads/' . $uploadFile->name;
                    $uploadFile->saveAs($path, false);

                    $file_obj['name'] = $uploadFile->name;
                    $file_obj['type'] = $uploadFile->type;
                    $file_obj['path'] = $path;
                    array_push($file_array, $file_obj);
                }
            }

            $result = $this->createTicket($first_name . ' ' . $last_name, $email, $phone, $subject, $message, $tag, $file_array, $company, $website);

            if ($result['success']) {
                $response['status'] = true;
                $response['message'] = "Thank you for contacting us, we will be in touch soon.";
            } else {
                $response['status'] = false;
                $response['message'] = $result['value'];
            }
//        }

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return $response;
        }

        return $this->redirect([
            'site/' . $actionId,
            'model' => $model
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Update contracted field an existing Users model.
     *
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionMakeContracted($id)
    {
        $model = $this->findModel($id);
        $model->is_contracted = !$model->is_contracted;

        return $model->save();
    }

    /**
     * Render new mail form
     *
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionCreateMail($id)
    {
        $user = $this->findModel($id);

        $mailModel = new MailForm([
            'userId' => $id,
        ]);

        return $this->renderAjax('_send-mail', [
            'user' => $user,
            'mailModel' => $mailModel
        ]);
    }

    /**
     * Send mail with specified subject and body
     *
     * @return bool
     * @throws NotFoundHttpException
     */
    public function actionSendMail()
    {
        $mailModel = new MailForm();

        if ($mailModel->load(Yii::$app->request->post()) && $mailModel->validate()) {
            $user = $this->findModel($mailModel->userId);
            if ($user) {
                return Yii::$app->activeCampaign->sendCustomEmail($user, $mailModel->subject, $mailModel->body);
            }
        }

        return false;
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $status = $this->findModel($id)->delete();

        if (Yii::$app->request->isAjax) {
            return $status;
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    /**
     * Add comment Users model.
     *
     * @return mixed
     */
    public function actionAddComment()
    {
        $model = new UserComment();
        $requestData = Yii::$app->request->post();
        if ($model->load($requestData) && $model->save()) {
            return true;
        }
        return false;
    }
}
