<?php

namespace app\controllers;

use app\models\UserComment;
use Yii;
use yii\web\Controller;
use app\models\Startup;
use yii\web\NotFoundHttpException;

class CommentsController extends Controller
{
    /**
     * Render Note window for specified startup
     *
     * @param integer $startupId
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex(int $startupId)
    {
        $startUp = self::findStartupModel($startupId);
        $commentModel = new UserComment();

        return $this->renderAjax('index', compact('startUp','commentModel'));
    }
    /**
     * Render all comments for specified startup
     *
     * @param integer $startupId
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionMessages(int $startupId)
    {
        $startUp = self::findStartupModel($startupId);
        $comments = [];
        if ($startUp) {
            $comments = $startUp->comments;
        }

        return $this->renderAjax('_messages', compact('comments'));
    }

    /**
     * Add comment Users model.
     *
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserComment();
        $requestData = Yii::$app->request->post();

        if ($model->load($requestData) && $model->save()) {
            return true;
        }

        return false;
    }

    /**
     * Finds the Startup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Startup the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findStartupModel(int $id)
    {
        if (($model = Startup::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
