<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\User */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="inner-padding">

    <div id="ajaxMessageContainer"></div>

    <div class="heading">
        <h2 class="heading__title lh-1 mb-50">Write To Us</h2>
    </div>
    <?php $form = ActiveForm::begin(['action' => 'user/create', 'options' => ['method' => 'post', 'enctype' => 'multipart/form-data', "id" => "contact-form", 'novalidate' => '']]); ?>
        <input type="hidden" id="user-page" class="custom-form-control" name="User[page]" value="<?= $page ?>">
        <input type="hidden" id="user-requestfrom" class="custom-form-control" name="User[requestFrom]" value="contact">
        <input type="hidden" id="user-status" class="custom-form-control" name="User[status]" value="new">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'first_name')->textInput(['placeholder' => 'First Name', 'required' => true, 'maxlength' => true])->label(false)  ?>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name', 'maxlength' => true, 'required' => true])->label(false)  ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email', 'maxlength' => true, 'required' => true])->label(false) ?>
                <input type="text" id="user-email1" class="custom-form-control" name="User[email1]" maxlength="45" placeholder="Email" required="">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group field-user-phone">
                    <input type="text" id="user-phone" class="form-control" name="User[phone]" placeholder="Phone" required="">
                    <div class="help-block"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <?= $form->field($model, 'company')->textInput(['placeholder' => 'Company', 'maxlength' => true])->label(false) ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'website')->textInput(['placeholder' => "Website", 'maxlength' => true])->label(false) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <select id="user-subject" class="custom-select" name="User[subject]" required style="background-color: #e6ae48;padding-left: 10px;">
                    <option value="">Please Select...</option>
                    <option value="Entrepreneur">Entrepreneur</option>
                    <option value="Talent Sourcing" <?= Yii::$app->request->url == '/talent-sourcing' ? 'selected' : '' ?>>Talent Sourcing</option>
                    <option value="Enterprise">Enterprise</option>
                    <option value="Coworking">Coworking</option>
                    <option value="Schedule a Tour">Schedule a Tour</option>
                    <option value="Partnership Opportunities">Partnership Opportunities</option>
                    <option value="Press">Press</option>
                </select>
                <div class="help-block"></div>
            </div>
        </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group" style="margin-top:10px;">
                <?= $form->field($model, 'message')->textarea(['placeholder' => "Message", 'rows' => 6, 'required' => true, 'maxlength' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <!-- BUTTONS -->
    <div class="row d-flex btn-row">
        <!-- SELECT FILE -->
        <div class="col-xs-12 col-md-6 col-lg-6 input-container-custom">
            <button type="button" class="btn btn-gray btn__rounded  btn__hover3 input-custom ml-20 add-file-btn" style="width: 200px">
                ADD FILE
                <span style="text-align: center; font-size: 7px; position: absolute; left: 0px;top: 35px; width: 100%; height: 50px;line-height: 10px;">Max file size is 2MB</span>
            </button>
            <div style="margin-top:50px;">
                <?= $form->field($model, 'image[]')->fileInput(['multiple' => true, 'class' => 'input-hide'])->label(false) ?>
            </div>
            </div>
            <!-- /SELECT FILE -->
            <div class="col-xs-12 col-md-6 col-lg-6 flex-right">
                <?= Html::submitButton(Yii::t('app', 'Send Message'), ['class' => 'btn btn__rounded btn__primary btn__hover3']) ?>
            </div>
        </div>
        <!-- BUTTONS -->
    <?php ActiveForm::end(); ?>
</div>
