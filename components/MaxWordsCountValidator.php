<?php
namespace app\components;

use yii\validators\Validator;

class MaxWordsCountValidator extends Validator
{
    const ERROR_MESSAGE = 'Limit of {limit} words is exceeded.';

    /** @var integer $limit */
    public $limit;

    /**
     * Validate attribute
     *
     * @param \yii\base\Model $model
     * @param string $attribute
     */
    public function validateAttribute($model, $attribute)
    {
        $count = $this->calculateWordsCount($model->$attribute);
        if ($count > $this->limit) {
            $this->addError($model, $attribute, self::ERROR_MESSAGE, ['limit' => $this->limit]);
        }
    }

    /**
     * Calculate count of words in text
     *
     * @param string|null $text
     * @return int
     */
    private function calculateWordsCount(?string $text)
    {
        $text = str_replace(["\r\n", "\r", "\n", "\t"], ' ', $text);
        $words = explode(' ',  $text);

        return count(array_diff($words, [null, '']));
    }
}
