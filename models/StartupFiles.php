<?php

namespace app\models;

use Yii;


class StartupFiles extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'startup_files';
    }

    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        return [];
    }
}