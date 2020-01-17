<?php
namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class UserComment extends \yii\db\ActiveRecord
{
	public static function tableName()
    {
        return 'comments';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    'value' => time(),
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        return [
            [['user_id','startup_id'], 'integer'],
            [['comment'], 'string'],
            [['created_at','updated_at'], 'safe'],
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}