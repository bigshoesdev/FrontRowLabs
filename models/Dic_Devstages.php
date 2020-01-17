<?php

namespace app\models;

use Yii;


class Dic_Devstages extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'dictionary_devstages';
    }

    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        return [];
    }
}