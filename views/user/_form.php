<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use app\assets\AppAsset;


AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput([
        'maxlength' => true,
        'pattern' => "\d{10}",
        'title' => "Please enter exactly 10 digits"
    ]) ?>
    <span id="errmsg"></span>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

   
    <?= $form->field($model, 'message')->textarea(['rows' => 6, 'maxlength' => true]) ?>

    <div class="row">
      <?= $form->field($model, 'image')->widget(FileInput::class, [
              'options' => ['accept' => 'image/*'],
              'pluginOptions' => ['allowedFileExtensions' => ['jpg', 'gif', 'png'], 'showUpload' => false]
          ]);
      ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
