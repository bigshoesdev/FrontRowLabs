<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 **/
class Files extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        return [];
    }
}