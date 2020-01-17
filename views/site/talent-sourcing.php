<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Talent Sourcing';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- ========================
   page title
=========================== -->
<section id="page-title" class="page-title page-title-layout2 page-title-layout3 bg-overlay bg-overlay-2">
    <picture class="bg-img">
        <img src="<?php echo Yii::$app->homeUrl; ?>/images/page-titles/4.png" alt="background">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">Talent Sourcing & Management</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->


<!-- ========================
          Tabs 1
=========================== -->
<section id="tabs1" class="tabs tabs-1 text-center pb-0">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <nav class="nav nav-tabs justify-content-center">
                <a id="btn-tab1" data-toggle="tab" href="#recruitment" title="Recruitment Reinvented!"
                   class="nav__link active">Executive Recruitment <br>
                    <p class="next-line">for companies</p>
                </a>
                <a id="btn-tab2" data-toggle="tab" href="#candidates" title="" class="nav__link">Better Experience<br>
                    <p class="next-line">for Candidates</p>
                </a>
                <a id="btn-tab3" data-toggle="tab" href="#resources" title="Human Resources Reinvented!"
                   class="nav__link">Human
                    Resources<br>
                    <p class="next-line">for companies</p>
                </a>
            </nav>
            <div class="tab-content">

                <!-- ==========================
                        TAB 1 left
                  =========================== -->
                <div class="tab-pane fade show active" id="recruitment">
                    <section id="heading3" class="heading heading-3 pb-0">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- ==========================
                                       TITLE
                                =========================== -->
                                <div class="text-center container">
                                    <h2 class="heading__title color-dark">What makes our Talent Sourcing Division
                                        different from
                                        traditional
                                        recruitment?
                                    </h2>

                                    <p class="heading__subtitle color-theme"><a href="https://bit.ly/frlhrpdf"
                                                                                title="Downloadable PDF about Front Row HR Services"
                                                                                target=_blank>We have subject matter
                                            experts!</a></p>
                                    <p class="heading__desc">No recruiter is a Subject Matter Expert (SME) in every
                                        field.
                                        Consequently,
                                        candidates who don't have sufficient technical expertise get past recruiter
                                        screens. Our
                                        solution? Front
                                        Row Labs leverages our ecosystem by using our own SMEs, experts in numerous
                                        functional
                                        business areas,
                                        who vet each candidate's technical skills, knowledge, & abilities - recommending
                                        only those
                                        who are
                                        highly qualified and have demonstrated the required skills to succeed in their
                                        profession truly. Beyond
                                        that, we vet for cultural alignment to ensure a match between the existing
                                        workforce and the
                                        new hire,
                                        building the most capable, productive, and innovative team.
                                    </p>
                                    <div class="divider__line mb-60"></div>
                                </div>

                                <!-- ========================
                                  cta 4
                                  ========================= -->
                                <section id="cta4" class="cta cta-4 text-center bg-overlay bg-parallax">
                                    <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/17.png" alt="background"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                                <div class="heading__shapemb-10"></div>
                                                <h2 class="cta__title">We have reinvented<br>the traditional recruitment
                                                    model</h2>
                                                <p class="cta__desc">We are offering a predictable, fast, repeatable
                                                    process
                                                    guaranteed to be both efficient and effective. Here’s a sneak
                                                    peek at our process:</p>
                                                <!-- <a href="#contact1" id="cta1" class="btn btn__white btn__hover2">Contact Us</a> -->
                                            </div><!-- /.col-lg-8 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section><!-- /.cta 4  -->


                                <!-- ========================
                                  Timeline
                                =========================== -->
                                <section id="timeline" class="timeline">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                                                <div class="timeline-wrap">

                                                    <!-- Timeline Item #1 -->
                                                    <div class="timeline__item">
                                                        <!-- <div class="timeline__item-date"></div> -->
                                                        <div class="timeline__item-content">
                                                            <h4 class="timeline__item-title">
                                                                <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                            </h4>
                                                            <p class="timeline__item-desc text-left">
                                                                We capture your required qualifications and preferred
                                                                qualifications.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- /.timeline-item -->

                                                    <!-- Timeline Item #2 -->
                                                    <div class="timeline__item">
                                                        <!-- <div class="timeline__item-date"></div> -->
                                                        <div class="timeline__item-content">
                                                            <h4 class="timeline__item-title">
                                                                <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                            </h4>
                                                            <p class="timeline__item-desc text-left">
                                                                Our Subject Matter Experts (SMEs) preview & prescreen
                                                                potential candidates for
                                                                both skills and a personality/cultural
                                                                match. For those who meet your criteria, we share their
                                                                video prescreen on your
                                                                dashboard. Video prescreens are not
                                                                generic video profiles, but rather a pre-screens
                                                                specific to the open position within
                                                                your company.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- /.timeline-item -->

                                                    <!-- Timeline Item #3 -->
                                                    <div class="timeline__item">
                                                        <!-- <div class="timeline__item-date"></div> -->
                                                        <div class="timeline__item-content">
                                                            <h4 class="timeline__item-title">
                                                                <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                            </h4>
                                                            <p class="timeline__item-desc text-left">
                                                                You view the video prescreen then launch our feedback
                                                                tool to independently &
                                                                efficiently share feedback in real-time.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- /.timeline-item -->

                                                    <!-- Timeline Item #4 -->
                                                    <div class="timeline__item">
                                                        <!-- <div class="timeline__item-date"></div> -->
                                                        <div class="timeline__item-content">
                                                            <h4 class="timeline__item-title">
                                                                <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                            </h4>
                                                            <p class="timeline__item-desc text-left">
                                                                Positive feedback results in a first interview being
                                                                automatically scheduled via
                                                                our scheduling app.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- /.timeline-item -->


                                                </div><!-- /.timeline wrap -->
                                            </div><!-- /.col-lg-10 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section><!-- /.timeline  -->


                                <!-- ========================
                                       cta 2
                                =========================== -->
                                <section id="cta2" class="cta cta-2 pt-60 pb-60 text-center-xs-sm bg-dark">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-8 col-lg-9">
                                                <h3 class="cta__title color-white">Want to find out more?</h3>
                                                <p class="cta__desc color-white">Download a detailed presentation of our
                                                    services for more details
                                                </p>
                                            </div><!-- /.col-lg-9 -->
                                            <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
                                                <a href="https://bit.ly/frlhrpdf"
                                                   title="Downloadable PDF about Front Row HR Services" target=_blank
                                                   id="scroll-contact1"
                                                   class="btn btn__rounded btn__primary btn__hover2 talent-contact">
                                                    Download
                                                </a>
                                            </div><!-- /.col-lg-3 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section><!-- /.cta 2 -->

                            </div>
                        </div>

                    </section>

                </div>
                <!-- >>> recruitment end -->


                <!-- ==========================
                        TAB 2 medium
                  =========================== -->
                <div class="tab-pane fade" id="candidates">
                    <section id="heading3" class="heading heading-3">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="text-center container">
                                    <h2 class="heading__title color-dark">Ready for a better Can-X (Candidate
                                        Experience)?</h2>
                                    <!-- <p class="heading__subtitle color-dark">We have subject matter experts!</p> -->
                                    <div class="heading__desc col-12 col-lg-8 offset-lg-2  text-center">
                                        <p> We know that you don't want to waste time interviewing for a role that
                                            doesn't align with your career objectives or isn't a cultural fit. We
                                            respect that you are
                                            evaluating prospective employers just like they are evaluating your skills,
                                            aptitude, and
                                            personality.
                                            <br><b>How do we make sure your needs are being met?</b>
                                        </p>

                                    </div><!-- /.col-12 -->

                                    <div class="divider__line"></div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                    </section><!-- /.heading 3 -->


                    <!-- ========================
                                    cta 4
                    ========================= -->
                    <section id="cta4" class="cta cta-4 text-center bg-overlay bg-parallax">
                        <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/18.png" alt="background"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                    <div class="heading__shapemb-10 smb_tab_2"></div>
                                    <h2 class="cta__title"></h2>
                                    <p class="cta__desc"></p>
                                    <!-- <a href="#contact1" id="cta1" class="btn btn__white btn__hover2">Contact Us</a> -->
                                </div><!-- /.col-lg-8 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.cta 4  -->

                    <!-- ========================
                      Timeline
                    =========================== -->
                    <section id="timeline" class="timeline">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                                    <div class="timeline-wrap">

                                        <!-- Timeline Item #1 -->
                                        <div class="timeline__item">
                                            <!-- <div class="timeline__item-date"></div> -->
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title">
                                                    <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                </h4>
                                                <p class="timeline__item-desc text-left">
                                                    We use video to communicate efficiently and effectively so that we
                                                    get a jump start on
                                                    the placement process without
                                                    you having to take time away from your current responsibilities.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #2 -->
                                        <div class="timeline__item">
                                            <!-- <div class="timeline__item-date"></div> -->
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title">
                                                    <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                </h4>
                                                <p class="timeline__item-desc text-left">
                                                    We throw candidate pools out the window and instead follow a Rolling
                                                    Interview
                                                    methodology. You "roll" into each
                                                    stage of the candidacy process without any other candidate impacting
                                                    that timeline and
                                                    slowing down your progress.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #3 -->
                                        <div class="timeline__item">
                                            <!-- <div class="timeline__item-date"></div> -->
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title">
                                                    <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                </h4>
                                                <p class="timeline__item-desc text-left">
                                                    Did you know that the #1 reason relationships fail, including
                                                    employee/employer
                                                    relationships, is misaligned
                                                    expectations? We set clear & concise expectations so that the
                                                    process is predictable and
                                                    reliable.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #4 -->
                                        <div class="timeline__item">
                                            <!-- <div class="timeline__item-date"></div> -->
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title">
                                                    <!-- <i class="fa fa-check-circle-o" aria-hidden="true"></i> -->
                                                </h4>
                                                <p class="timeline__item-desc text-left">
                                                    Finally, you deserve and have 24/7 access to real-time status
                                                    updates during each stage
                                                    of the placement process.
                                                    You never have to wonder where you stand or when decisions are
                                                    expected.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->


                                    </div><!-- /.timeline wrap -->
                                </div><!-- /.col-lg-10 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.timeline  -->

                    <!-- ========================
                                  cta 2
                    =========================== -->
                    <section id="cta2" class="cta cta-2 pt-60 pb-60 text-center-xs-sm bg-dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-9">
                                    <h3 class="cta__title color-white">Want to find out more?</h3>
                                    <p class="cta__desc color-white">Download a detailed presentation of our services
                                        for more details
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
                                    <a href="https://bit.ly/frlhrpdf"
                                       title="Downloadable PDF about Front Row HR Services" target=_blank
                                       id="scroll-contact2"
                                       class="btn btn__rounded btn__primary btn__hover2">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!-- >>> candidates end -->


                <!-- ==========================
                        TAB 3 right
                  =========================== -->
                <div class="tab-pane fade" id="resources">
                    <section id="heading3" class="heading heading-3">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="text-center container">


                                    <h2 class="heading__title color-dark">Whether it’s comprehensive support or
                                        on-demand
                                        a-la-carte assistance you require, here’s just a few of the human
                                        resources services available to you.
                                    </h2>
                                    <div class="divider__line"></div>

                                </div>
                    </section><!-- /.heading 3 -->

                    <!-- ========================
                                    cta 4
                    ========================= -->
                    <section id="cta4" class="cta cta-4 text-center bg-overlay bg-parallax">
                        <div class="bg-img">
                            <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/19.png" style="background-position: 50% 100%"
                                 alt="background">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                    <div class="heading__shapemb-10 smb_tab_3"></div>
                                    <h2 class="cta__title"></h2>
                                    <p class="cta__desc"></p>
                                    <!-- <a href="#contact1" id="cta1" class="btn btn__white btn__hover2">Contact Us</a> -->
                                </div><!-- /.col-lg-8 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.cta 4  -->

                    <!-- ========================
                                  Timeline
                          =========================== -->
                    <section id="timeline" class="timeline">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                                    <div class="timeline-wrap">

                                        <!-- Timeline Item #1 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Employee handbooks.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #2 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    New hire onboarding & orientation programs.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #3 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Compensation, health, & benefit programs.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #4 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Job Description creation & management.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #5 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Employee performance reviews.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #6 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Staff analysis, skill gap identification, & employee development.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #7 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Talent management, including employee rewards programs & retention
                                                    strategies.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #8 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Anti-bullying, workplace violence, & harassment prevention awareness
                                                    training.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #9 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Progressive discipline & conflict resolution.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #10 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Employment separation & exit interviews.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                        <!-- Timeline Item #10 -->
                                        <div class="timeline__item">
                                            <div class="timeline__item-content">
                                                <h4 class="timeline__item-title"></h4>
                                                <p class="timeline__item-desc text-left">
                                                    Corporate volunteer initiatives.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.timeline-item -->

                                    </div><!-- /.timeline wrap -->
                                </div><!-- /.col-lg-10 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.timeline  -->

                    <!-- ========================
                                      cta 2
                          =========================== -->
                    <section id="cta2" class="cta cta-2 pt-60 pb-60 text-center-xs-sm bg-dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-9">
                                    <h3 class="cta__title color-white">Want to find out more?</h3>
                                    <p class="cta__desc color-white">Download a detailed presentation of our services
                                        for more details
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
                                    <a href="https://bit.ly/frlhrpdf"
                                       title="Downloadable PDF about Front Row HR Services" target=_blank
                                       id="scroll-contact3"
                                       class="btn btn__rounded btn__primary btn__hover2 talent-contact">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>


                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>
        <!-- >>> resources end -->
    </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->

</section><!-- /.tabs 1  -->

<!-- ========================
              contact 1
  =========================== -->
<section id="contact1" class="contact p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                <?= $this->render('_contact-form', [
                    'model' => $model,
                    'page' => 'Talent Sourcing'
                ]); ?>
            </div>
            <!-- /.col-lg-6 -->

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="contact__banner align-v-h bg-overlay">
                    <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/15.png" alt="background"></div>
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

