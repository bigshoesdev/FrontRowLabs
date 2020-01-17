<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;

/* @var $user app\models\User */
/* @var $mailModel app\models\MailForm */
?>

<div class="mail-form" id="mail-form">

    <h5>Send mail to <b><?= $user->name ?></b></h5>
    <div id="success-alert" class="alert-success alert fade in" style="display: none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Your message was sent successfully.
    </div>
    <div id="error-alert" class="alert-error alert fade in" style="display: none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Your message was not sent.
    </div>
    <?php $form = ActiveForm::begin([
            'action' => '/user/send-mail',
            'options' => [
                'method' => 'post',
                'id' => 'send-mail-form',
                'class' => 'comment-form',
                'data-update-url' => \yii\helpers\Url::to(['/user/create-mail', 'id' => $user->id])
            ]
        ]); ?>
        <?= $form->field($mailModel, 'userId')->hiddenInput(['value' => $mailModel->userId, 'class' => 'hidden-input']) ?>

        <label>Subject:</label>
        <?= $form->field($mailModel, 'subject')->textInput(['id' => 'msg-subject', 'required' => true]) ?>

        <label>Text:</label>
        <?= $form->field($mailModel, 'body')->textarea(['id' => 'msg-text', 'rows'=> 5, 'required' => true]) ?>

    <?php ActiveForm::end(); ?>
    <?= \yii\helpers\Html::a('Send Mail', '#', ['id' => 'send-mail', 'class' => 'btn btn-success']) ?>

</div>
