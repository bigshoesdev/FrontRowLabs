<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;

AppAsset::register($this);
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- ========================
   page title
=========================== -->
<section id="page-title" class="page-title page-title-layout2 page-title-layout3 bg-overlay bg-overlay-2">
    <div class="bg-img center-bottom"><img src="<?php echo Yii::$app->homeUrl; ?>/images/page-titles/1.png"
                                           alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">About Us</h1>
                <!--<nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Front Row Labs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                  </ol>
                </nav>
              </div>-->
                <!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ==========================
            Heading 1
=========================== -->
<section id="heading2" class="heading">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="heading__title">We&nbsp;are tech&nbsp;industry&nbsp;vets who&nbsp;have&nbsp;been in
                        the&nbsp;trenches since the early&nbsp;days of&nbsp;the dot&#8209;com&nbsp;boom</h2>
                    <div class="divider__line divider__theme"></div>
                    <p class="heading__desc font-italic font-secondary mb-0">We’ve started companies, grown companies
                        and sold
                        companies<br>
                        We’ve known success and we’ve known failure - and we’ve learned a lot along the way.<br>
                        Today, we are CEOs, CFOs, CTOs, CIOs and CMOs who have joined together to inject new life into
                        early-stage startups - and the tech industry at large.</p>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.heading 1 -->


<!-- ======================
           banner 1
========================= -->
<section id="banner1" class="banner banner-1 video video-1 p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 bg-gray">
                <div class="inner-padding">
                    <div class="heading heading-2 text-center">
                        <div class="divider__line divider__theme mb-40"></div>
                        <h2 class="heading__title">Why We Do It</h2>
                        <p class="heading__desc">As tech industry veterans, we have seen thousands of disruptive ideas
                            that have
                            forever changed the way we work and live. We’ve also seen too many great ideas that failed
                            to get off
                            the ground. That’s why we grabbed a seat in the front row - so we can lend our knowledge and
                            expertise
                            to innovators and innovations, ensuring that no great idea is lost to the dustbin of history
                            because
                            of avoidable roadblocks. We believe in game-changing technology and the disruptors who drive
                            it. We
                            believe they can change the world for the better - and we’re invested in helping them do
                            it.</p>
                    </div><!-- /.heading -->
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <picture class="bg-img">
                    <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/banners/6.webp" type="image/webp">
                    <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/6.png" alt="background">
                </picture>
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 1 -->

<!-- ========================
        cta 2
=========================== -->
<section id="cta2" class="cta cta-2 pt-60 pb-60 text-center-xs-sm bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9">
                <h3 class="cta__title color-white">Would you like to work with us?</h3>
                <p class="cta__desc color-white">Get a seat on the Front Row!</p>
            </div><!-- /.col-lg-9 -->
            <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
                <a href="#contact1" id="scroll-contact" class="btn btn__rounded btn__primary btn__hover3">Contact us</a>
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta 2 -->


<!-- ==========================
        Heading 6
    =========================== -->
<section id="heading6" class="heading heading-4 heading-6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="heading__title">We have a wide variety of expertise to lend to many business and
                        technical
                        issues
                    </h2>
                    <div class="divider__line"></div>
                </div>
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.heading 6 -->

<!-- ========================
          2 columns
=========================== -->
<section>
    <div class="container">
        <div class="row mb-40">
            <div class="col-md-6">
                <h6>Technology Expertise</h6>
                <p>Virtual Reality, Augmented Reality, Digital Marketing, Software Development, Mobile Software,
                    Traditional
                    and
                    Cloud-Based Services & Integration, 3D Visualization and Advanced Rendering, Content Management Systems,
                    Biometrics,
                    Identity,
                    Security, Business Integration, Acoustics, Accounting Software, Sensors, Customer Resource
                    Management, Big
                    Data / Data
                    Sciences, Business / Software Automation, Patient Management, Trading Platforms, Blockchain, Crypto
                    Currencies, Human
                    Resources, Streaming Technologies, Artificial Intelligence, Salesforce Management</p>
            </div>
            <div class="col-md-6">
                <h6>Business Verticals</h6>
                <p>Business Intelligence & Analytics, Logistics (US and Global), Manufacturing, Distribution, Supply
                    chain,
                    Ecommerce /
                    Retail, Consulting services, FinTech, Mergers and Acquisitions, Private Equity, Venture Capital,
                    Food and
                    Beverage,
                    Consumer Goods, Automotive, Entertainment, Licensing, Government, Insurance, Travel, Real Estate</p>
            </div>
        </div><!-- /.row -->
    </div>
</section>


<!-- ==========================
          Banner 3
=========================== -->
<section id="banner3" class="banner banner-3 p-0 bg-gray">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/2.png" alt="background">
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="inner-padding">
                    <div class="heading heading-4 heading-7 mb-40">
                        <h2 class="heading__title">An&nbsp;Ecosystem of&nbsp;Support, Positioned for&nbsp;Success</h2>
                        <div class="divider__line divider__theme divider__left"></div>
                        <p class="heading__desc">In addition to an onsite executive team, Front Row Labs provides a
                            comprehensive roster of A-list partners - from law
                            firms to CPAs to HR and beyond - who don’t simply offer services, but are committed to your
                            company’s
                            success and have
                            skin in the game. Our partners include National law firms, top 5 accounting firms, National
                            banking
                            firms, National IP
                            firms, and a myriad of affiliate organizations</p>
                    </div><!-- /.heading -->
                    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="3" data-slide-sm="2"
                         data-autoplay="true" data-nav="false" data-dots="true" data-space="10" data-loop="true"
                         data-speed="800"
                         data-autoplay-timeout="2500">
                        <!-- fancybox item #1 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-c-level"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Experienced C-Levels</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #2 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-vibrant-ecosystem-4-bronze"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Vibrant Ecosystem</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #3 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-legal"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Legal</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #4 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-special-events"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Professional &<br> Social Events</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #5 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-gastro-cafe"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Gastro Cafe</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #6 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-fast-internet"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Fast Internet</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #7 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-finance-payroll"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Finance/Payroll</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #8 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-banking"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Banking</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #9 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-consierge"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Consierge</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #10 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-catering"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Catering</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #11 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-intellectual-property"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">intellectual<br>Property</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #12 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-benefits"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Benefits</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #13 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-private-phone-room"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Private Phone Room</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #14 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-unique-common-areas"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Unique Common Areas</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #15 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-24-hours"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">24/7 Access</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->

                        <!-- fancybox item #16 -->
                        <div class="fancybox-item text-center">
                            <div class="fancybox__icon">

                                <div class="icon-svg icon-insurances"></div>

                            </div><!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Insurances</h4>
                            </div><!-- /.fancybox-content -->
                        </div><!-- /.fancybox-item -->


                    </div><!-- /.carousel -->
                </div>
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 3 -->

<!-- ========================
            contact 1
=========================== -->
<section id="contact1" class="contact p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                <?= $this->render('_contact-form', [
                    'model' => $model,
                    'page' => 'About'
                ]); ?>
            </div>
            <!-- /.col-lg-6 -->

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="contact__banner align-v-h bg-overlay">
                    <div class="bg-img">
                        <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/8.png" alt="background"></div>
                    <div class="heading text-center">
                        <div class="heading__shape heading__shape-white"></div>
                        <h2 class="heading__title color-white">Ready to talk ?!<br> Don't Hesitate to contact us</h2>
                        <div class="divider__line divider__white"></div>
                    </div><!-- /.heading -->
                </div><!-- /.contact-banner -->
            </div>
            <!-- /.col-lg-6 -->

        </div>
    </div>
</section>
