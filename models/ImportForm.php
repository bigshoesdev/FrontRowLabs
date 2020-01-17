<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ImportForm extends Model
{
    public $csvFile;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    /** @var array $columnNames - Column names for exported csv file */
    public static $columnNames = [
        'ID',
        'First Name',
        'Last Name',
        'Email',
        'Phone',
        'Company',
        'Address',
        'URL',
        'Description',
        'Problem',
        'Business Model',
        'In Development',
        'Has Demo',
        'Demo URL',
        'Industry',
        'Dev Stage',
        'Funding',
        '# of people',
        'Has Launched',
        'Has Paying',
        'Proof of Concepts',
        'Status'
    ];

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                'csvFile',
                'file',
                'extensions' => 'csv',
                'maxSize' => 5242880,
                'checkExtensionByMimeType' => false
            ]
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'csvFile' => 'Choose File',
        ];
    }
}
