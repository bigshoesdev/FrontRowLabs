<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\ArrayHelper;
use app\assets\AppAsset;

AppAsset::register($this);
?>
    <section id="page-title"
             class="page-title page-title-layout10 page-title-layout11 text-center bg-overlay bg-overlay-2">
        <picture class="bg-img">
            <source srcset="/images/page-titles/2.webp" type="image/webp">
            <img src="/images/page-titles/2.png" alt="background">
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Application Form</h1>
                    <h3 class="pagetitle__heading" style="font-size: 20px;margin-top:20px;line-height: 30px; ">Thanks for your interest in Front Row Labs first startup contest.
                        <br/>To enter, please complete the application below. Applications will be accepted through April 30th 2020.</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php

$form = ActiveForm::begin([
    'id' => 'acceptance-form',
//    'enableAjaxValidation' => true,
    'action' => 'contest/saveform',
    'options' => ['method' => 'post', 'enctype' => 'multipart/form-data']
]);

$form->errorSummary($model);

$this->title = 'Application form';

?>
    <style>
        form label.control-label {
            display: block;
            color: black;
        }

        .help-block {
            color: red;
        }
    </style>
    <section id="contact1" class="contact p-0 contact-form-section">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="acceptance-form col-sm-12 col-md-8 offset-md-2" style="padding: 30px; margin-top: 15px;">
                            <?php if (!is_null($user)): ?>
                                <h3>Hello, <?= $user->name ?> </h3>
                                <p class="greeting-text-1">
                                    we are excited to see you here!
                                </p>
                                <p class="greeting-text-2">
                                    Please fill in the application below<br>
                                    to check if your project qualifies for a seat at Front Row!
                                </p>
                                <?= $form->field($model, 'user_id')
                                    ->hiddenInput(['value' => $user->id])
                                    ->label(false);
                                ?>
                            <?php else: ?>
                                <h3>Who are you?</h3>
                                <?= $form->field($model, 'first_name')
                                    ->textInput(['maxlength' => true])
                                    ->label('First Name:')
                                ?>
                                <?= $form->field($model, 'last_name')
                                    ->textInput(['maxlength' => true])
                                    ->label('Last Name:')
                                ?>

                                <input type="text" id="user-email1" class="custom-form-control" name="StartupForm[email1]" maxlength="45" value="">
                                <?= $form->field($model, 'email')
                                    ->textInput(['maxlength' => true])
                                    ->label('Your email address:')
                                ?>
                                <div class="form-group field-startupform-phone required">
                                    <label class="control-label" for="startupform-phone">Your phone number:</label>
                                    <input type="text" id="startupform-phone" class="form-control" name="StartupForm[phone]">
                                    <div class="help-block"></div>
                                </div>

                                <?= $form->field($model, 'user_id')
                                    ->hiddenInput(['value' => ''])
                                    ->label(false)
                                ?>
                            <?php endif; ?>

                            <h4 style="text-transform: none">Information About Your Project and Company:</h4>

                            <?= $form->field($model, 'name')
                                ->textInput(['maxlength' => true])
                                ->label('What is your company\'s name?')
                            ?>
                            <?= $form->field($model, 'address')
                                ->textInput(['maxlength' => true])
                                ->label('Where is your company located?')
                            ?>
                            <?= $form->field($model, 'url')
                                ->textInput(['maxlength' => true])
                                ->label('What\'s your company\'s web address?')
                            ?>
                            <?php $listData = ArrayHelper::map($dictionary_industries, 'id', 'name'); ?>
                            <?= $form->field($model, 'industry_id')
                                ->dropdownList($listData, ['prompt' => '---'])
                                ->label('What industry best fits your product?')
                            ?>
                            <?= $form->field($model, 'description')
                                ->textArea(['maxlength' => true])
                                ->label('Describe your product in 100 words or less:')
                            ?>
                            <?= $form->field($model, 'problem')
                                ->textArea(['maxlength' => true])
                                ->label('Again, in 100 words or less explain what is the problem you are trying to solve:')
                            ?>
                            <?= $form->field($model, 'business_model')
                                ->textArea(['maxlength' => true])
                                ->label('What\'s your business model?  How do you plan to make money? (50 word limit)')
                            ?>
                            <?= $form->field($model, 'age')
                                ->dropdownList(\app\models\Startup::AGES, ['prompt' => '---'])
                                ->label('How long have you been in development?')
                            ?>
                            <?= $form->field($model, 'has_demo')
                                ->radioList([true => 'Yes', false => 'No'])
                                ->label('Do you have a demo?')
                            ?>
                            <div class="form-group" id="group_has_demo">
                                <?= $form->field($model, 'demo_url')
                                    ->textInput(['maxlength' => true])
                                    ->label('Please enter a demo URL:')
                                ?>
                            </div>
                            <?php $listData = ArrayHelper::map($dictionary_devstages, 'id', 'name'); ?>
                            <?= $form->field($model, 'devstage_id')
                                ->dropdownList($listData, ['prompt' => '---'])
                                ->label('Your current development stage is:')
                            ?>
                            <?= $form->field($model, 'funding')
                                ->dropdownList(\app\models\Startup::FUNDING, ['prompt' => '---'])
                                ->label('What funding have you received to date?')
                            ?>
                            <?= $form->field($model, 'people_count')
                                ->dropdownList(\app\models\Startup::PEOPLE_COUNT, ['prompt' => '---'])
                                ->label('Number of people working on your product?')
                            ?>
                            <?= $form->field($model, 'has_paying')
                                ->radioList([true => 'Yes', false => 'No'])
                                ->label('Any paying customers?')
                            ?>
                            <?= $form->field($model, 'has_launched')
                                ->radioList([true => 'Yes', false => 'No'])
                                ->label('Has product launched?')
                            ?>
                            <div class="form-group" id="group_has_launched">
                                <?= $form->field($model, 'proofs')
                                    ->textArea(['maxlength' => true])
                                    ->label('Any proof of concepts or outside testing?')
                                ?>
                            </div>
                            <h4>Attachments</h4>
                            <?php if (!is_null($user)) {
                                $shortfilename = trim($user->image_src_filename, '["');
                                $shortfilename = trim($shortfilename, '"]');
                                if (strlen($shortfilename) > 10) {
                                    $shortfilename = substr($shortfilename, 0, 10) . '...';
                                }

                                $image_link = trim($user->image_web_filename, '["');
                                $image_link = trim($image_link, '"]');
                                echo '<a href="/uploads/' . $image_link . '" target="_blank"><i class="fa fa-file" aria-hidden="true"></i> ' . $shortfilename . '</a><br/>';
                            } ?>
                            <hr/>
                            <?= $form->field($model, 'pitch_file')->fileinput()->label('Pitch deck ( The file size should be less than 2MB. )'); ?>
                            <div class="form-group" id="additional_files">
                                <?= Html::button('Add more files', ['class' => 'glyphicon glyphicon-plus btn btn-default btn-sm add-items', 'id' => 'add_more_files']) ?>
                                <div class="form-group g-add-file" id="g-add-file-01">
                                    <?= $form->field($model, 'add_file_01')->fileinput()->label('Additional file 01'); ?>
                                </div>
                                <div class="form-group g-add-file" id="g-add-file-02">
                                    <?= $form->field($model, 'add_file_02')->fileinput()->label('Additional file 02'); ?>
                                </div>
                                <div class="form-group g-add-file" id="g-add-file-03">
                                    <?= $form->field($model, 'add_file_03')->fileinput()->label('Additional file 03'); ?>
                                </div>
                                <div class="form-group g-add-file" id="g-add-file-04">
                                    <?= $form->field($model, 'add_file_04')->fileinput()->label('Additional file 04'); ?>
                                </div>
                                <div class="form-group g-add-file" id="g-add-file-05">
                                    <?= $form->field($model, 'add_file_05')->fileinput()->label('Additional file 05'); ?>
                                </div>

                                <hr/>

                                <div class="form-group">
                                    <?= Html::submitButton(Yii::t('app', 'SUBMIT'), ['class' => 'btn btn-success']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3"></div>
            </div>
        </div>
    </section>
<?php
$script = <<< JS
    jQuery('.g-add-file').hide();
    jQuery('#registration-state-box').hide();
    jQuery('#group_has_demo').hide();
    jQuery('#group_has_launched').hide();
    jQuery('#state-box').hide();

    jQuery('#startupform-has_demo').click( function() {
        var radios = jQuery('#startupform-has_demo input[type="radio"]');
        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                if (radios[i].value == 1) {
                    jQuery('#group_has_demo').show();
                } else {
                    jQuery('#group_has_demo').hide();
                }
                break;
            }
        }
    });
    jQuery('#startupform-has_launched').click( function() {
        var radios = jQuery('#startupform-has_launched input[type="radio"]');
        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                if (radios[i].value == 1) {
                    jQuery('#group_has_launched').hide();
                } else {
                    jQuery('#group_has_launched').show();
                }
                break;
            }
        }
    });
    jQuery('#add_more_files').click( function() {
        var files = jQuery('.g-add-file');
        for (var i = 0, length = files.length; i < length; i++) {
            if (jQuery('#g-add-file-0' + i).css('display') == 'none') {
                jQuery('#g-add-file-0' + i).show();
                break;
            }
        }
    });
JS;
$this->registerJs($script);
?>