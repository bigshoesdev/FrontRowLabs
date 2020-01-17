<?php

namespace app\models;

use yii\base\Model;

/**
 * MailForm is the model behind the send mail form.
 */
class MailForm extends Model
{
    public $userId;
    public $subject;
    public $body;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // userId, subject and body are required
            [['userId', 'subject', 'body'], 'required']
        ];
    }

}
