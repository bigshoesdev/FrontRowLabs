<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <link href="<?php echo Yii::$app->homeUrl; ?>/images/favicon/favicon.png" rel="icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
        <style>
            #errmsg {
                color: red;
            }
        </style>
        <link rel="stylesheet" href="/css/custom.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JX9Y32JZJH"></script>
        <script type="e67a594321cca88648cf2bab-text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag()
            {
                dataLayer.push(arguments);
            }
            gtag('js', new Date()); gtag('config', 'G-JX9Y32JZJH');
        </script>
    </head>

    <body>
    <?php $this->beginBody() ?>
    <!-- =========================
                Pre-Loader
        =========================== -->
    <div class="spinner-container">

        <div class="spinner">
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle class="length" fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33"
                        r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
        </div>
    </div>
    <div class="wrapper <?= Yii::$app->request->url == '/talent-sourcing' ? 'page-talent' : ''?>">
        <!-- =========================
            Header
        =========================== -->
        <header id="header"
                class="header <?php echo (Yii::$app->controller->id == 'user') ? '' : 'header-transparent'; ?>">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo Url::base(true); ?>">
                        <img src="<?php echo Yii::$app->homeUrl; ?>/images/logo/frlogo-light.svg" class="logo-light"
                             alt="logo">
                        <img src="<?php echo Yii::$app->homeUrl; ?>/images/logo/frlogo-dark.svg" class="logo-dark"
                             alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav mr-auto ml-auto">
                            <li class="nav__item">
                                <a href="<?php echo Url::base(true); ?>" class="nav__item-link">Home </a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="<?php echo Url::to(['/about']); ?>" class="nav__item-link">About Us</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="<?php echo Url::to(['/what-we-do']); ?>" class="nav__item-link">What We Do</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="<?php echo Url::to(['/talent-sourcing']); ?>" class="nav__item-link">Talent Sourcing</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="<?php echo Url::to(['/contact']); ?>" class="nav__item-link">Contact</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item mobile-show">
                                <a href="<?php echo Url::to(['/contest']); ?>" class="nav__item-link">Contest</a>
                            </li><!-- /.nav-item -->

                            <?php if (!Yii::$app->user->isGuest) { ?>
                                <li class="nav__item">
                                    <?= Html::a('Logout', ["/logout"], ['data' => ['method' => 'post'], 'class' => 'nav__item-link']) ?>
                                </li>
                            <?php } ?>

                            <!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                    <div class="navbar-modules">
                        <div class="modules__wrapper d-flex align-items-center">
                            <a href="<?php echo Url::to(['/contest']); ?>"
                               class="module__btn module__btn-contact active">Contest</a>
                            <a href="#" class="module__btn module__btn-sidenav"><i class="york-menu"></i></a>
                        </div><!-- /.modules-wrapper -->
                    </div><!-- /.navbar-modules -->
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->
        <?= $content ?>

        <footer id="footer1" class="footer footer-1 bg-heading">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-lg-3 footer__widget footer__widget-about">
                            <div class="footer__widget-content">
                                <img src="<?php echo Yii::$app->homeUrl; ?>/images/logo/frlogo-light-line.svg"
                                     alt="logo"
                                     class="footer__logo">
                                <p>Front Row Labs : The next evolution in the incubator/accelerator system</p>
                                <ul class="contact__list list-unstyled">
                                    <li><i class="fa fa-phone"></i><a href="tel:+1.610-798-5500">610.798.5500</a></li>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:hello@frontrowlabs.com">Hello@FrontRowLabs.com</a>
                                    </li>
<!--                                    <li><i class="fa fa-map-marker"></i>Bucks County, PA. USA</li>-->
                                </ul>
                            </div>
                        </div>
                        <!-- /.col-lg-3 -->
                    </div>
                </div>
            </div>
            <!-- /.footer-top -->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <div class="footer__copyright">
                                <span>&copy; 2020 Front Row Labs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->
        <button id="scrollTopBtn"><i class="arrow_up"></i></button>
        <div class="module__sidenav-container">
            <div class="sidenav__menu">
                <i class="fa fa-times close-sidenav"></i>
                <div class="sidenav__menu-header mb-40">
                    <img src="<?php echo Yii::$app->homeUrl; ?>/images/logo/frlogo-dark.svg" alt="logo" class="mb-20">
                    <p>Front Row Labs : The next evolution in the incubator/accelerator system</p>
                </div><!-- /.sidenav-menu-header -->
                <ul class="contact__list list-unstyled mb-50">
                    <li><i class="fa fa-phone"></i><a href="tel:+1.610-798-5500">610.798.5500</a></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:Hello@FrontRowLabs.com">Hello@FrontRowLabs.com</a>
                    </li>
<!--                    <li><i class="icon-map-pin"></i>Bucks County, PA. USA</li>-->
                </ul><!-- /.contact-list -->
            </div><!-- /.sidenav-menu -->
        </div><!-- /.module-sidenav-container -->
    </div>
    <?php $this->endBody() ?>
    <?php
    $flash_data = $users_list = false;
    if (Yii::$app->session->hasFlash('contactFormSubmitted')) {
        if ((Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') || (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'contact')) {
            $flash_data = true;
            $section = ".contact-form-section";
        }
    }

    if (Yii::$app->controller->id == 'user' && Yii::$app->controller->action->id == 'index') {
        $users_list = true;
        $section = ".contact-lists";
    }
    if ($users_list || $flash_data) {
        ?>
        <script>
            jQuery(document).ready(function () {
                jQuery('html, body').animate({
                    scrollTop: jQuery('<?php echo $section; ?>').offset().top - 250
                }, 2000);
            });
        </script>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <script type="text/javascript">
        (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo"); vgo('setAccount', '649779985'); vgo('setTrackByDefault', true); vgo('process');
    </script>
    </body>

    </html>
<?php $this->endPage() ?>