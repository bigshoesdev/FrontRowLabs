<?php

use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $commentModel yii\data\ActiveDataProvider */
/* @var $new yii\data\ActiveDataProvider */
/* @var $applied yii\data\ActiveDataProvider */
/* @var $screening yii\data\ActiveDataProvider */
/* @var $interview yii\data\ActiveDataProvider */
/* @var $selected yii\data\ActiveDataProvider */
/* @var $declined yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("css/bootstrap/bootstrap.css");
?>
<?= \app\widgets\Alert::widget() ?>

<section id="contact1" class="contact users-list">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-12 col-lg-12 users-index contact-lists">
                <!-- /.cta 1 -->
                <div class="inner-padding">

                    <div class="nav-tabs-custom">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs nav-tabs-child d-block">
                                <li>
                                    <a href="#tab_31" class="d-inline-flex" data-toggle="tab">
                                        New
                                    </a>
                                    <span class="white glyphicon glyphicon-triangle-right font-size-30"></span>
                                </li>
                                <li>
                                    <a href="#tab_32" class="d-inline-flex active" data-toggle="tab">
                                        Applied
                                    </a>
                                    <span class="white glyphicon glyphicon-triangle-right font-size-30"></span>
                                </li>
                                <li>
                                    <a href="#tab_33" class="d-inline-flex" data-toggle="tab">
                                        Screening
                                    </a>
                                    <span class="white glyphicon glyphicon-triangle-right font-size-30"></span>
                                </li>
                                <li>
                                    <a href="#tab_34" class="d-inline-flex" data-toggle="tab">
                                        Interviews
                                    </a>
                                    <span class="white glyphicon glyphicon-triangle-right font-size-30"></span>
                                </li>
                                <li>
                                    <a href="#tab_35" class="d-inline-flex" data-toggle="tab">
                                        Selected
                                    </a>
                                </li>
                                <li class="float-right">
                                    <a href="#tab_36" class="d-inline-flex" data-toggle="tab">
                                        Declined
                                    </a>
                                </li>
                            </ul>
                            <div class="table-data-actions">
                                <input id="file" type="file" accept=".csv" style="display: none">
                                <a id="import_file" href="#">Import</a>
                                <a id="export_file" href="#">Export</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab_31">
                                    <?= $this->render('_table', [
                                        'dataProvider' => $newStartups,
                                        'userSearchModel' => $userStartupsSearchModel,
                                        'pjaxId' => 'pjax-users-startups'
                                    ]);
                                    ?>
                                </div>
                                <div class="tab-pane active" id="tab_32">
                                    <?= $this->render('/contest/_table', [
                                        'dataProvider' => $applied,
                                        'pjaxId' => 'pjax-startup-applied'
                                    ]);
                                    ?>
                                </div>
                                <div class="tab-pane" id="tab_33">
                                    <?= $this->render('/contest/_table', [
                                        'dataProvider' => $screening,
                                        'pjaxId' => 'pjax-startup-screening'
                                    ]);
                                    ?>
                                </div>
                                <div class="tab-pane" id="tab_34">
                                    <?= $this->render('/contest/_table', [
                                        'dataProvider' => $interview,
                                        'pjaxId' => 'pjax-startup-interview'
                                    ]);
                                    ?>
                                </div>
                                <div class="tab-pane" id="tab_35">
                                    <?= $this->render('/contest/_table', [
                                        'dataProvider' => $selected,
                                        'pjaxId' => 'pjax-startup-selected'
                                    ]);
                                    ?>
                                </div>
                                <div class="tab-pane" id="tab_36">
                                    <?= $this->render('/contest/_table', [
                                        'dataProvider' => $declined,
                                        'pjaxId' => 'pjax-startup-declined'
                                    ]);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Commnet Modal -->
    <div class="modal comments-modal fade" id="comment-modal">
        <div class="modal-dialog" style="max-width: 75% !important;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" id="comment" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove-circle"></span>
                    </button>
                </div>
                <div class="modal-body" id="comment-modal-body">
                </div>
            </div>
        </div>
    </div>

    <!-- Attachments Modal -->
    <div class="modal fade " id="attachments-modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="attachments" class="close-modal">&times;</button>
                    <h5><span class="glyphicon glyphicon-lock"></span>All Attachments</h5>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</section>
