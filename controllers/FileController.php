<?php

namespace app\controllers;

use app\models\Files;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class FileController extends Controller
{
    public function actionDownload($id)
    {
        $file = self::findModel($id);
        $file = Yii::getAlias('@web') . $file->url;
        return Yii::$app->response->sendFile($file);
    }

    protected function findModel($id)
    {
        if (($model = Files::findOne($id)) !== null) {
            return $model;
        } else {
            return new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
