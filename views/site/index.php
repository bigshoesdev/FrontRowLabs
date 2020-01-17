<?php

use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */

$this->title = 'Front Row Labs';
?>
    <!-- ============================
            Slider
        ============================== -->
    <section id="slider" class="slider">

        <!-- SLIDER CONTENT  -->
        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
             data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
             data-speed="3000" data-autoplay-timeout="15000" data-transition="fade" data-animate-out="fadeOut"
             data-animate-in="fadeIn">

            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <picture class="bg-img">
                    <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/slider/2.webp" type="image/webp"
                            media="all">
                    <img src="<?php echo Yii::$app->homeUrl; ?>/images/slider/2.png" alt="Slider image">
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                            <div class="slide__content">
                                <span class="slide__subtitle">Venture Catalyst</span>
                                <h2 class="slide__title">We are Front Row Labs</h2>
                                <a href="#welcome" class="btn btn__rounded btn__white btn__bordered learn__more">Learn
                                    More</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->

            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <picture class="bg-img">
                    <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/slider/1.webp" type="image/webp">
                    <img src="<?php echo Yii::$app->homeUrl; ?>/images/slider/1.png" alt="1">
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                            <div class="slide__content">
                                <span class="slide__subtitle">A Venture Catalyst</span>
                                <h2 class="slide__title">Changing the&nbsp;paradigm of startup&nbsp;success</h2>
                                <a href="#welcome" class="btn btn__rounded btn__white learn__more">Learn More</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->

        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ============================
        welcome
    ============================== -->
    <section id="welcome" class="welcome pt-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading text-center">
                        <div class="heading__shape"></div>
                        <h2 class="heading__title">A Groundbreaking Approach to&nbsp;Startup Success</h2>
                        <div class="divider__line divider__theme"></div>
                        <p class="heading__desc font-italic font-secondary mb-0">We help innovators innovate and
                            startups succeed. We’re revolutionizing the way companies grow and thrive. We have three
                            lines of
                            business - a startup success catalyst program an innovation center and an alternative
                            workspace - that
                            help
                            great ideas come to life
                        </p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.welcome -->

    <!-- ======================
           banner 1
      ========================= -->
    <section id="banner1" class="banner banner-1 video video-1 p-0">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="bg-overlay">
                        <picture class="bg-img">
                            <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/banners/1.webp" type="image/webp">
                            <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/1.png" alt="background">
                        </picture>

                        <div class="video__btn align-v-h">
                        </div>
                    </div><!-- /.video -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-6 col-lg-6 bg-gray">
                    <div class="inner-padding">
                        <div class="heading heading-2 text-center">
                            <div class="divider__line divider__theme mb-40"></div>
                            <h2 class="heading__title">A Place for&nbsp;Collaboration and&nbsp;Inspiration</h2>
                            <p class="heading__desc">A workspace is more than simply an office. It’s a hotbed of
                                collaboration
                                where
                                entrepreneurs can come together to share ideas and inspiration. It is strategically
                                located between
                                metropolitan areas where corporations are based, providing an easily accessible
                                satellite office in
                                a
                                relevant geographic area
                            </p>
                        </div><!-- /.heading -->
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner 1 -->

    <!-- ========================
               cta 1
            =========================== -->
    <section id="cta1" class="cta cta-1 pt-60 pb-60 text-center-xs-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <h3 class="cta__title">Would you like to work with us?</h3>
                    <p class="cta__desc">Get a seat on the Front Row!</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
                    <a href="#contact1" id="scroll-contact" class="btn btn__rounded btn__primary btn__hover3">Contact
                        us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================
       fancybox layout 4
    ============================ -->
    <section id="fancyboxLayout4" class="fancybox-layout4 text-center p-0">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <!-- feature item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="fancybox-item mb-0 bg-gray equal-height">
                        <div class="fancybox__icon color-heading">

                            <div class="icon-svg icon-venture-catalyst"></div>

                        </div><!-- /.feature-icon -->
                        <div class="fancybox__content">

                            <h4 class="fancybox__title color-dark">Venture Catalyst</h4>
                            <p class="fancybox__desc color-body text-left">We have reinvented the incubator/accelerator
                                model by
                                adding the missing ingredient for success - an executive team that works side-by-side
                                with startups
                                from
                                strategy through execution to build a solid foundation for future success. We call it
                                the “Venture
                                Catalyst"
                            </p>


                        </div><!-- /.feature-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->

                <!-- feature item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="fancybox-item mb-0 bg-theme equal-height">
                        <div class="fancybox__icon">

                            <div class="icon-svg icon-innovation-center"></div>

                        </div><!-- /.feature-icon -->
                        <div class="fancybox__content">

                            <h4 class="fancybox__title">Corporate Innovation Center</h4>
                            <p class="fancybox__desc text-left">Our innovation center provides an off-site creative
                                space where
                                corporations
                                looking to generate new ideas can find inspiration. Designed to elicit energy and boost
                                creativity,
                                Front Row Labs offers a unique space away from the office where great innovations are
                                hatched.
                            </p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- feature item #3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="fancybox-item mb-0 bg-gray-dark equal-height">
                        <div class="fancybox__icon">

                            <div class="icon-svg icon-alternate-workspace"></div>

                        </div><!-- /.feature-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Alternative Workspace</h4>
                            <p class="fancybox__desc text-left">As cities become more crowded and traffic continues to
                                intensify,
                                commuting from the suburbs to the city wastes valuable time that could be spent on
                                productivity. Our
                                alternative suburban workspace offers a luxurious and fully equipped satellite
                                office.</p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- feature item #4 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="fancybox-item mb-0 bg-heading equal-height">
                        <div class="fancybox__icon">

                            <div class="icon-svg icon-vibrant-ecosystem"></div>

                        </div><!-- /.feature-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Vibrant Ecosystem</h4>
                            <p class="fancybox__desc text-left">We take an alternative approach to the co-working model,
                                creating
                                a
                                modern space with high-end amenities and comforts that go far beyond the average office.
                                With a
                                gastro
                                cafe with menus created by a world-class chef and special events that provide networking
                                and
                                learning
                                opportunities.</p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fancybox-layout4 -->

    <!-- ==========================
        fancybox Bordered
    =========================== -->
    <section id="fancyboxBordered" class="fancybox-bordered text-center pt-100 pb-90">
        <div class="container">

            <!-- <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-3 mb-60">
                  <h2 class="heading__title">Build A Better Business</h2>
                  <p class="heading__desc">We Help You and Your Company Succeed and Innovate </p>
                  <div class="divider__line"></div>
                </div>
              </div>
            </div> -->
            <!-- /.row -->

            <div class="row fancybox-row">
                <!-- fancybox item #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4 fancybox-item">
                    <div class="fancybox__icon">

                        <div class="icon-svg icon-c-level"></div>
                        <!-- <i class="icon-desktop"></i> -->

                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">C-Level on site services</h4>
                        <p class="fancybox__desc">We can fill the gaps that may exist in your business with seasoned
                            professionals
                        </p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                <!-- fancybox item #2 -->
                <div class="col-sm-12 col-md-4 col-lg-4 fancybox-item">
                    <div class="fancybox__icon">

                        <i class="icon-strategy"></i>

                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Tier 1 on site partners</h4>
                        <p class="fancybox__desc">Whether you need legal advice, Intellectual Property filings,
                            Accounting,
                            Payroll, etc we will have it available on site</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                <!-- fancybox item #3 -->
                <div class="col-sm-12 col-md-4 col-lg-4 fancybox-item">
                    <div class="fancybox__icon">

                        <!-- <i class="icon-layers"></i> -->
                        <div class="icon-svg icon-benefits3"></div>

                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Access to Seed Funding</h4>
                        <p class="fancybox__desc">We will introduce you to Angel and Seed Funding Investors as well as
                            to VC’s
                            as
                            your company grows.</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.row -->
            <div class="row fancybox-row mb-50">
                <!-- fancybox item #4 -->
                <div class="col-sm-12 col-md-4 col-lg-4 fancybox-item">
                    <div class="fancybox__icon">

                        <div class="icon-svg icon-success-training"></div>
                        <!-- <i class="icon-video"></i> -->

                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Success Training</h4>
                        <p class="fancybox__desc">Once you’re accepted into the program we offer many courses of
                            instruction to
                            educate you in Pitch Deck Preparation, Go
                            To Market Strategies, Value Creation, etc.</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                <!-- fancybox item #5 -->
                <div class="col-sm-12 col-md-4 col-lg-4 fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-circle-compass"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Technical Development</h4>
                        <p class="fancybox__desc">We have cost-effective teams to help in your software development
                            needs.</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                <!-- fancybox item #6 -->
                <div class="col-sm-12 col-md-4 col-lg-4 fancybox-item">
                    <div class="fancybox__icon">

                        <div class="icon-svg icon-special-events"></div>
                        <!-- <i class="icon-mobile"></i> -->

                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">Special Events</h4>
                        <p class="fancybox__desc">We have regularly scheduled speakers and social events to help provide
                            exceptional networking and educational
                            opportunities.</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <a href="<?php echo Url::to(['/what-we-do']); ?>" class="btn btn__rounded btn__secondary btn__bordered">MORE</a>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fancybox Bordered -->

    <!-- =========================== 
      projects Gallery 4 Columns 
    ============================= -->
    <section id="projectsGallery4col" class="projects projects-gallery p-0">
        <div class="container-fluid col-padding-0">

            <div class="row">

                <!-- project item #1 -->
                <!-- <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="project-item">
                    <div class="project__img">
                      <img src="assets/images/portfolio/grid/4col/1.png" alt="project img">
                      <div class="project__hover">
                        <div class="hover__content">
                          <div class="hover__content-inner">
                            <h4 class="project__title"><a href="#">The Living Branding</a></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <!-- project item #2 -->
                <!-- <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="project-item">
                    <div class="project__img">
                      <img src="assets/images/portfolio/grid/4col/2.png" alt="project img">
                      <div class="project__hover">
                        <div class="hover__content">
                          <div class="hover__content-inner">
                            <h4 class="project__title"><a href="#">Calender Poster Mockup</a></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <!-- project item #3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="project-item">
                        <div class="project__img">
                            <img src="<?php echo Yii::$app->homeUrl; ?>/images/portfolio/grid/4col/3.png"
                                 alt="project img">
                            <div class="project__hover">
                                <div class="hover__content d-flex newsletter__form">
                                    <div class="hover__content-inner">
                                        <h4 class="project__title text-center">C-level Executive Services</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- project item #4 -->
                <!-- <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="project-item">
                    <div class="project__img">
                      <img src="assets/images/portfolio/grid/4col/4.png" alt="project img">
                      <div class="project__hover">
                        <div class="hover__content">
                          <div class="hover__content-inner">
                            <h4 class="project__title"><a href="#">Yellow Cards Print</a></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

                <!-- project item #5 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="project-item">
                        <div class="project__img">
                            <img src="<?php echo Yii::$app->homeUrl; ?>/images/portfolio/grid/4col/6.png"
                                 alt="project img">
                            <div class="project__hover">
                                <div class="hover__content d-flex newsletter__form">
                                    <div class="hover__content-inner">
                                        <h4 class="project__title text-center">Yummy Food Selection At the Gastro
                                            Cafe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- project item #8 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="project-item">
                        <div class="project__img">
                            <img src="<?php echo Yii::$app->homeUrl; ?>/images/portfolio/grid/4col/7.png"
                                 alt="project img">
                            <div class="project__hover">
                                <div class="hover__content d-flex newsletter__form">
                                    <div class="hover__content-inner">
                                        <h4 class="project__title text-center">Flexible Conference Room Spaces</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- project item #7 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="project-item">
                        <div class="project__img">
                            <img src="<?php echo Yii::$app->homeUrl; ?>/images/portfolio/grid/4col/8.png"
                                 alt="project img">
                            <div class="project__hover">
                                <div class="hover__content d-flex newsletter__form">
                                    <div class="hover__content-inner">
                                        <h4 class="project__title text-center">Sandwich selection at the Gastro
                                            Cafe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row -->
        </div>
    </section>

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
                            <h2 class="heading__title color-white">Ready to talk ?!<br> Don't Hesitate to contact us
                            </h2>
                            <div class="divider__line divider__white"></div>
                        </div><!-- /.heading -->
                    </div><!-- /.contact-banner -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                    <?= $this->render('_contact-form', [
                            'model' => $model,
                            'page' => 'Home'
                    ]) ?>
                </div>
                <!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact 1 -->
