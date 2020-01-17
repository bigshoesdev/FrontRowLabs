<?php

namespace app\models;

use Yii;
use yii\helpers\Json;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $uuid
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $message
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property boolean $is_contracted
 * @property int $rememberMe
 * @property string $status
 * @property array $files
 * @property string $image_src_filename
 * @property string $image_web_filename
 * @property UserComment[] $userComment
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_NEW = 'new';
    const STATUS_APPLIED = 'applied';

    const Entrepreneur_STARTUP = 'Entrepreneur';
    const Talent_Sourcing = 'Talent Sourcing';
    const Coworking = 'Coworking';
    const SCHEDULE_TOUR = 'Schedule a Tour';
    const ENTERPRISE = 'ENTERPRISE';
    const Partnership_Opportunities = 'Partnership Opportunities';
    const Press = 'Press';

    const SUBJECTS = [
        self::Entrepreneur_STARTUP,
        self::Talent_Sourcing,
        self::ENTERPRISE,
        self::Coworking,
        self::SCHEDULE_TOUR,
        self::Partnership_Opportunities,
        self::Press
    ];
    /**
     * {@inheritdoc}
     */

    public $image;

    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc1}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'status', 'subject'], 'string', 'min' => 3, 'max' => 38],
            [['email'], 'string', 'min' => 3, 'max' => 45],
            [['company'], 'string', 'min' => 3, 'max' => 45],
            [['website'], 'string', 'min' => 3, 'max' => 100],
            [['message'], 'string', 'min' => 3, 'max' => 1000],
            [['email'], 'email'],
            [['is_contracted'], 'boolean'],
            [['email', 'username'], 'unique', 'targetClass' => User::class, 'message' => 'This email has already been taken.'],
            [['phone'], 'string', 'min' => 9],
            [['image'], 'file', 'extensions' => 'jpg, gif, png, pdf, doc, docx, jpeg, xls, xlsx, ppt, pptx, txt, zip', 'maxFiles' => 100, 'maxSize' => 1024 * 1024 * 10],
            ['status', 'string'],
            [['image_src_filename', 'image_web_filename'], 'string', 'max' => 20000],
            [['first_name', 'last_name'], 'match', 'pattern' => '/^[a-zA-Z\s]+$/', 'message' => 'Allows only word characters (a-z, A-Z)']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'message' => 'Message',
            'email' => 'Email',
            'phone' => 'Phone',
            'company' => 'Company',
            'website' => 'Website',
            'subject' => 'Subject',
            'status' => 'Status',
            'is_contracted' => 'Contracted',
            'image_src_filename' => Yii::t('app', 'Filename'),
            'image_web_filename' => Yii::t('app', 'Pathname'),    
        ];
    }

    /**
     * Get all users comments
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserComment()
    {
        return $this->hasMany(UserComment::class, ['user_id' => 'id']);
    }

    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    /**
     * Finds an identity by the given username.
     * @param string $username the users name to be looked for
     * @return IdentityInterface|null the identity object that matches the given username.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public function findByUsername($username)
    {
        return User::findOne(['username' => $username]);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * @return IdentityInterface|null the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return User::findOne(['accessToken' => $token]);
    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
       return $this->authKey;
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Get array with users files
     *
     * @return array
     */
    public function getFiles()
    {
        $filesNames = Json::decode($this->image_src_filename);
        $filePath = Json::decode($this->image_web_filename);

        if ($filesNames && $filePath) {
            return array_combine($filePath, $filesNames);
        }
        return [];
    }

    /**
     * Remove users files during delete
     *
     * @return bool
     */
    public function beforeDelete()
    {
        $files = $this->getFiles();
        foreach ($files as $pathName => $fileName) {
            unlink(Yii::$app->basePath . '/web/uploads/' . $pathName);
        }
        return parent::beforeDelete();
    }

    /**
     * Getter for users full name
     *
     * @return string
     */
    public function getName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
