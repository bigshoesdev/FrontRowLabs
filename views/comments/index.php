<?php
/* @var $startUp app\models\Startup */
/* @var $commentModel app\models\UserComment */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<div class="comments-list">
    <div class="form-group d-flex comment-place">
        <?php $form = ActiveForm::begin([
            'action' => '/comments/create',
            'options' => [
                'method' => 'post',
                'id' => 'add-comment-form',
                'updateUrl' => Url::to(['comments/messages', 'startupId' => $startUp->id]),
                'class' => 'comment-form'
            ]
        ]); ?>
            <?= $form->field($commentModel, 'user_id')->hiddenInput(['value' => Yii::$app->user->id, 'class' => 'hidden-input']) ?>
            <?= $form->field($commentModel, 'startup_id')->hiddenInput(['value' => $startUp->id, 'class' => 'hidden-input']) ?>
            <div class="d-flex msg-input-block">
                <span class="note-label">NOTE:</span>
                <?= $form->field($commentModel, 'comment')->textarea(['oninput' => 'this.style.height = "";this.style.height = this.scrollHeight + "px"', 'required' => true, 'class' => 'message-input'])->label(false) ?>
                <?= Html::submitButton('<span class="glyphicon glyphicon-send"></span>', ['id' => 'send-comment', 'class' => 'send-msg-btn']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div id="messages_block" class="comments">
        <?= $this->render('_messages', ['comments' => $startUp->comments]) ?>
    </div>
</div>
<script>
    $('#add-comment-form').on('beforeSubmit', function(event) {
        event.preventDefault();
        event.stopPropagation();
        let form = $(this);
        let url = form.attr("action");
        let method = form.attr("method");
        let updateUrl = form.attr("updateUrl");
        console.log(formData);
        var formData = new FormData(form[0]);

        $.ajax({
            url: url,
            data: formData,
            datatype: 'json',
            processData: false,
            contentType: false,
            type: method,
            success: function(data) {
                if (data) {
                    $('.message-input').val('');
                    $('.message-input').css("height", "");
                    $('#messages_block').load(updateUrl);
                }
            }
        });
        return false;
    });
</script>
