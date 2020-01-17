<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * UploadForm is the model behind the file upload form.
 */
class UploadForm extends Model
{
    public $file;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           [['file'], 'file', 'extensions' => 'jpg, gif, png, pdf, doc, docx, xls, xlsx, ppt, txt, zip', 'maxSize' => 1024 * 1024 * 10]
        ];
    }
}
