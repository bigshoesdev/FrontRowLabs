<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "startups".
 *
 * @property int $id
 * @property int $name
 * @property int $age
 * @property int $industry_id
 * @property int $devstage_id
 * @property int $pitchdeck
 * @property int $funding
 * @property int $people_count
 * @property string $address
 * @property string $proofs
 * @property string $url
 * @property string $demo_url
 * @property string $description
 * @property string $problem
 * @property boolean $has_demo
 * @property boolean $has_launched
 * @property boolean $has_paying
 * @property int $business_model
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Dic_Devstages $devstage
 * @property Dic_Industries $industry
 * @property User $user
 * @property UserComment[] $comments
 * @property Files[] $files
 * @property Files $pitchdeckFile
 * @property string $userName
 */
class Startup extends \yii\db\ActiveRecord
{
    // startup`s statuses
    const STATUS_NEW = 1;
    const STATUS_APPLIED = 2;
    const STATUS_SCREENING = 3;
    const STATUS_INTERVIEWS = 4;
    const STATUS_SELECTED = 5;
    const STATUS_DECLINED = 6;

    const STATUSES = [
        self::STATUS_NEW => 'New',
        self::STATUS_APPLIED => 'Applied',
        self::STATUS_SCREENING => 'Screening',
        self::STATUS_INTERVIEWS => 'Interviews',
        self::STATUS_SELECTED => 'Selected',
        self::STATUS_DECLINED => 'Declined',
    ];

    // startup`s ages
    const AGE_NOT_STARTED = 1;
    const AGE_LESS_HALF_YEAR = 2;
    const AGE_LESS_YEAR = 3;
    const AGE_MORE_THAN_YEAR = 4;

    const AGES = [
        self::AGE_NOT_STARTED => 'Haven\'t started',
        self::AGE_LESS_HALF_YEAR => '0-6 months',
        self::AGE_LESS_YEAR => '6 months – 1 year',
        self::AGE_MORE_THAN_YEAR => 'More than a year',
    ];

    // startup`s funding
    const FUNDING_ZERO = 1;
    const FUNDING_LESS_50 = 2;
    const FUNDING_LESS_100 = 3;
    const FUNDING_LESS_250 = 4;
    const FUNDING_OVER_250 = 5;

    const FUNDING = [
        self::FUNDING_ZERO => 'Zero',
        self::FUNDING_LESS_50 => 'Less than $50k',
        self::FUNDING_LESS_100 => '$51k- $100k',
        self::FUNDING_LESS_250 => '$101-$250k',
        self::FUNDING_OVER_250 => 'Over $250k',
    ];

    // Number of people working on startup
    const PEOPLE_COUNT_NONE = 1;
    const PEOPLE_COUNT_ONE = 2;
    const PEOPLE_COUNT_UP_TO_4 = 3;
    const PEOPLE_COUNT_UP_TO_10 = 4;
    const PEOPLE_COUNT_OVER_10 = 5;

    const PEOPLE_COUNT = [
        self::PEOPLE_COUNT_NONE => 'none',
        self::PEOPLE_COUNT_ONE => 'just me',
        self::PEOPLE_COUNT_UP_TO_4 => '2-4',
        self::PEOPLE_COUNT_UP_TO_10 => '4-10',
        self::PEOPLE_COUNT_OVER_10 => '10+',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'startups';
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'status', 'name', 'has_demo', 'industry_id', 'devstage_id', 'funding', 'has_paying'], 'required'],
            [['user_id', 'status', 'has_demo', 'age', 'industry_id', 'devstage_id', 'has_paying', 'pitchdeck', 'people_count'], 'integer'],
            [['description', 'problem', 'address', 'proofs', 'business_model', 'url', 'demo_url'], 'string'],
            [['devstage_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dic_Devstages::class, 'targetAttribute' => ['devstage_id' => 'id']],
            [['industry_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dic_Industries::class, 'targetAttribute' => ['industry_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'name' => 'Company',
            'description' => 'Description',
            'problem' => 'Problem',
            'has_demo' => 'Has Demo',
            'industry_id' => 'Industry ID',
            'devstage_id' => 'Devstage',
            'funding' => 'Funding',
            'has_paying' => 'Has Paying',
            'pitchdeck' => 'Pitchdeck',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevstage()
    {
        return $this->hasOne(Dic_Devstages::class, ['id' => 'devstage_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndustry()
    {
        return $this->hasOne(Dic_Industries::class, ['id' => 'industry_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPitchdeckFile()
    {
        return $this->hasOne(Files::class, ['id' => 'pitchdeck']);
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->user ? $this->user->name : '';
    }

    /**
     * @return mixed
     */
    public function getDevstageName()
    {
        return $this->devstage ? $this->devstage->name : '';
    }

    /**
     * @return mixed
     */
    public function getIndustryName()
    {
        return $this->industry ? $this->industry->name : '';
    }

    /**
     * @return int
     */
    public function getCountFiles()
    {
        return count($this->files) + (!empty($this->pitchdeckFile) ? 1 : 0);
    }

    /**
     * Get all startup`s files
     *
     * @return \yii\db\ActiveQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function getFiles()
    {
        return $this->hasMany(Files::class, ['id' => 'file_id'])
            ->viaTable(StartupFiles::tableName(), ['startup_id' => 'id']);
    }

    /**
     * List of all comments for this startup
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(UserComment::class, ['startup_id' => 'id'])
            ->orderBy(['created_at' => SORT_DESC]);
    }

    /**
     * Total count of all startup`s comments
     *
     * @return int
     */
    public function getUserCommentCount()
    {
        return count($this->comments);
    }

    /**
     * Last comment for this startup
     *
     * @return UserComment|null
     */
    public function getLastComment()
    {
        if (!empty($this->comments)) {
            foreach ($this->comments as $comment) {
                return $comment;
            }
        }

        return null;
    }

    /**
     * Get last comment rwd
     *
     * @return null|string
     */
    public function getRwd()
    {
        $comment = $this->getLastComment();
        if ($comment) {
            return $comment->user->name . ' ' . date('m.d', $comment->created_at);
        }

        return '';
    }

    /**
     * Save startups files
     *
     * @param StartupForm $form
     */
    public function saveFiles(StartupForm $form)
    {
        $pitchdeck = UploadedFile::getInstance($form, 'pitch_file');
        $this->pitchdeck = $this->saveUploadedFile($pitchdeck);

         foreach (StartupForm::FILES_ATTRIBUTES as $fileName) {
             $uploadedFile = UploadedFile::getInstance($form, $fileName);
             if ($uploadedFile) {
                 $this->addFile($uploadedFile);
             }
         }
        $this->save(false);
    }

    /**
     * Add new file to startup model
     *
     * @param UploadedFile $uploadedFile
     * @return bool
     */
    public function addFile(UploadedFile $uploadedFile)
    {
        $fileId = $this->saveUploadedFile($uploadedFile);
        if ($fileId) {
            return (new StartupFiles([
                'startup_id' => $this->id,
                'file_id' => $fileId
            ]))->save();
        }
        return false;
    }

    /**
     * Save file in storage
     *
     * @param UploadedFile|null $uploadedFile
     * @return bool|mixed
     */
    private function saveUploadedFile(?UploadedFile $uploadedFile)
    {
        if ($uploadedFile) {
            $path = 'uploads/' . time() . '-' . $uploadedFile->baseName . '.' . $uploadedFile->extension;
            if ($uploadedFile->saveAs($path)) {
                $file = new Files([
                    'name' => $uploadedFile->name,
                    'url' => $path
                ]);
                if ($file->save()) {
                    return $file->id;
                }
            }
        }
        return false;
    }

    /**
     * Create startup files models by file link
     *
     * @param string $link
     * @return bool
     */
    public function saveFile(string $link)
    {
        $file = new Files([
            'name' => $link,
            'url' => 'uploads/' . $link
        ]);
        if ($file->save()) {
            return (new StartupFiles([
                'startup_id' => $this->id,
                'file_id' => $file->id
            ]))->save();
        }
        return false;
    }

}
