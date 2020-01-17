<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => true,
            'class' => 'form-inline search_form'
        ],
    ]); ?>

    <?= $form->field($model, 'first_name')->textInput(['placeholder' => 'First Name']) ?>
    <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>
    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone']) ?>
    <?php if ($showContracted): ?>
        <?= $form->field($model, 'is_contracted')->dropDownList(['' => 'Contracted', 1 => 'Yes', 0 => 'No']) ?>
    <?php endif;?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'custom-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
