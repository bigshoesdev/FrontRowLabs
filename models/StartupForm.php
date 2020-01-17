<?php

namespace app\models;

use app\components\MaxWordsCountValidator;
use Yii;
use yii\base\Model;

class StartupForm extends Model
{
    public $name;
    public $address;
    public $url;
    public $description;
    public $problem;
    public $business_model;
    public $age;
    public $has_demo;
    public $demo_url;
    public $industry_id;
    public $devstage_id;
    public $funding;
    public $people_count;
    public $has_launched;
    public $has_paying;
    public $proofs;
    public $pitch_file;
    public $add_file_01;
    public $add_file_02;
    public $add_file_03;
    public $add_file_04;
    public $add_file_05;

    // user registration if not set by param
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $user_id;

    const FILES_ATTRIBUTES =[
        'add_file_01',
        'add_file_02',
        'add_file_03',
        'add_file_04',
        'add_file_05'
    ];

    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        $rules = [
            [['name', 'address', 'url', 'industry_id', 'description', 'problem', 'business_model', 'age', 'devstage_id', 'funding', 'people_count', 'has_demo', 'has_launched', 'has_paying'], 'required', 'message' => 'Field cannot be blank.'],
            [['name', 'address'], 'string', 'min' => 3, 'max' => 50],
            [['url', 'demo_url'], 'url', 'defaultScheme' => 'http'],
            [['description', 'problem', 'business_model', 'proofs'], 'string', 'max' => 10000],
            [['funding', 'people_count', 'user_id'], 'integer'],
            [['url', 'demo_url'], 'string'],
            [['business_model'], MaxWordsCountValidator::class, 'limit' => 50],
            [['description', 'problem'], MaxWordsCountValidator::class, 'limit' => 100],
            [['email'], 'unique', 'targetClass' => User::class, 'message' => 'This email has already been taken.'],
            [['pitch_file', 'add_file_01', 'add_file_02', 'add_file_03', 'add_file_04', 'add_file_05'], 'file', 'extensions' => 'jpg, gif, jpeg, png, pdf, doc, docx, xls, xlsx, ppt, pptx, txt, zip', 'maxSize' => 1024 * 1024 * 10]
        ];
        $user_id = Yii::$app->request->post('StartupForm')['user_id'];
        if (empty($user_id)) {
            $rules_add = [
                [['email', 'phone', 'first_name', 'last_name'], 'required', 'message' => 'Field cannot be blank.'],
                [['first_name', 'last_name'], 'string', 'min' => 3, 'max' => 38],
                [['email'], 'string', 'min' => 3, 'max' => 45],
                [['email'], 'email'],
                [['phone'], 'string', 'min' => 9],
                [['first_name', 'last_name'], 'match', 'pattern' => '/^[a-zA-Z\s]+$/', 'message' => 'Allows only word characters (a-z, A-Z)']
            ];

            $rules = array_merge($rules, $rules_add);
        }

        return $rules;
    }
}