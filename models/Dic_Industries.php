<?php

namespace app\models;

use Yii;


class Dic_Industries extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'dictionary_industries';
    }

    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        return [];
    }
}