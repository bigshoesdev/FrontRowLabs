<?php
/* @var $this yii\web\View */
/* @var $startUp app\models\Startup */
/* @var $commentModel app\models\UserComment */

use yii\helpers\Html;

?>
<section id="contact1" class="contact p-0 contact-form-section">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div>Submitted: <?= date('d.m.y', $startUp->created_at) ?></div>
                        <div>Updated: <?= date('d.m.y', $startUp->updated_at) ?></div>
                        <?php if ($startUp->lastComment): ?>
                            <div>by: <?= $startUp->lastComment->user->name ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div>POC: <?= $startUp->userName ?></div>
                        <div>Phone: <?= $startUp->user->phone ?></div>
                        <div>Email: <?= $startUp->user->email ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 name-block">
                        <span class="modal-header-1"><?= $startUp->name ?></span>
                        <div>
                            <b>URL:</b> &nbsp;<a class="demo-url" href="<?= substr( $startUp->url, 0, 4 ) === "http" ? $startUp->url : 'http://' . $startUp->url ?>"><?= $startUp->url ?></a>
                            <br/>
                            <b>Location:</b> &nbsp;<?= $startUp->address ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <?php if ($startUp->has_demo): ?>
                            <div>
                                <strong>Demo: </strong><a class="demo-url" href="<?= $startUp->demo_url ?>"><?= $startUp->demo_url ?></a>
                            </div>
                        <?php endif;?>
                        <p><strong>Description:</strong> (100w or less): <?= $startUp->description ?></p>
                        <p><strong>Trying to solve:</strong> <?= $startUp->problem ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="modal-header-2">Pitch Deck:</p>
                        <div class="d-flex text-center align-self-center align-content-center justify-content-center">
                            <?php if (isset($startUp->pitchdeckFile)): ?>
                                <div>
                                    <?php if ($startUp->pitchdeckFile->name != null && strstr($startUp->pitchdeckFile->name, '.') == '.png' ||
                                        strstr($startUp->pitchdeckFile->name, '.') == '.gif' ||
                                        strstr($startUp->pitchdeckFile->name, '.') == '.jpg'): ?>
                                        <img class="fi" src="<?= $startUp->pitchdeckFile->url ?>" width="150" alt="img">
                                    <?php else: ?>
                                        <img class="fic" src="/uploads/file.png" width="150" alt="img">
                                    <?php endif; ?>
                                    <div>
                                        <?= Html::a($startUp->pitchdeckFile->name ?? 'file', ['/file/download', 'id' => $startUp->pitchdeckFile->id]) ?>
                                    </div>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="modal-header-2">Other files: </p>
                        <div class="text-center align-self-center align-content-center justify-content-center row">
                            <?php foreach ($startUp->files as $file): ?>
                                <?php if (isset($file)): ?>
                                    <div class="startup-file col-md-4">
                                        <?php if ($file->name != null && strstr($file->name, '.') == '.png' ||
                                            strstr($file->name, '.') == '.gif' ||
                                            strstr($file->name, '.') == '.jpg'): ?>
                                            <img class="fi" src="<?= $file->url ?>" width="150" alt="img">
                                        <?php else: ?>
                                            <img class="fic" src="/uploads/file.png" width="150" alt="img">
                                        <?php endif; ?>
                                        <div style="display: block; text-align: center;">
                                            <?= Html::a($file->name ?? 'file', ['/file/download', 'id' => $file->id]) ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-offset-8">
                <div id="upload_file_message"></div>
                <form id="upload_form"
                      method="post"
                      action="<?= \yii\helpers\Url::to(['startup/add-file', 'id' => $startUp->id]) ?>"
                      enctype="multipart/form-data"
                      data-startup-id="<?= $startUp->id ?>">
                    <input name="startup-file" id="select_file" type="file" class="hidden">
                </form>
                <button class="custom-btn" href="#" onclick="$('#select_file').click()">
                    Add file
                </button>
                <?php if ($startUp->countFiles) :?>
                    <a class="custom-btn" target="_blank" href="<?= \yii\helpers\Url::to(['startup/download-files', 'id' => $startUp->id]) ?>">
                        Download files
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-5 details-block">
                <div>Funding raised: <?= $startUp->funding ? \app\models\Startup::FUNDING[$startUp->funding] : '' ?></div>
                <div>Number of people: <?= $startUp->people_count ? \app\models\Startup::PEOPLE_COUNT[$startUp->people_count] : '' ?></div>
                <div>Industry: <?= $startUp->industryName ?></div>
                <div>Dev. Stage: <?= $startUp->devstageName ?></div>
                <div>In development: <?= $startUp->age ? \app\models\Startup::AGES[$startUp->age] : '' ?></div>
                <div>Business model: <?= $startUp->business_model ?></div>
                <div>Has launched: <?= $startUp->has_launched ? 'Yes' : 'No' ?></div>
                <div>Has paying customers: <?= $startUp->has_paying ? 'Yes' : 'No' ?></div>
                <?php if (!$startUp->has_launched): ?>
                    <div>Proof of concepts or outside testing: <?= $startUp->proofs ?></div>
                <?php endif; ?>
            </div>
            <div id="note_block" class="col-sm-7">
                <?= $this->render('/comments/index', [
                    'commentModel' => $commentModel,
                    'startUp' => $startUp
                ]) ?>
            </div>
        </div>
    </div>
</section>
