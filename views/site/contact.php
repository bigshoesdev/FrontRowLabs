<?php
/* @var $this yii\web\View */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Contact Front Row Labs';
?>
<!-- ========================
   page title 
   =========================== -->
<section id="page-title"
         class="page-title page-title-layout10 page-title-layout11 text-center bg-overlay bg-overlay-2">
    <picture class="bg-img">
        <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/page-titles/2.webp" type="image/webp">
        <img src="<?php echo Yii::$app->homeUrl; ?>/images/page-titles/2.png" alt="background">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading"><?= Html::encode($this->title) ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.page-title -->
<!-- ==========================
   contact 1
   =========================== -->
<section id="contact1" class="contact p-0 contact-form-section">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="contact__banner align-v-h bg-overlay">
                    <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/5.png"
                                             alt="background"></div>
                    <div class="heading text-center">
                        <div class="heading__shape heading__shape-white"></div>
                        <h2 class="heading__title color-white">Ready to talk ?!<br> Don't Hesitate to contact us</h2>
                        <div class="divider__line divider__white"></div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                <?= $this->render('_contact-form', [
                    'model' => $model,
                    'page' => 'Contact'
                ]); ?>
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /.contact 1 -->