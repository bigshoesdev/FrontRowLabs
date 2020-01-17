<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'What we do';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- ========================
   page title
=========================== -->
<section id="page-title" class="page-title page-title-layout2 page-title-layout3 bg-overlay bg-overlay-2">
    <picture class="bg-img">
        <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/page-titles/3.webp" type="image/webp">
        <img src="<?php echo Yii::$app->homeUrl; ?>/images/page-titles/3.png" alt="background">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">What We Do</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ==========================
            Heading 5
=========================== -->
<section id="heading3" class="heading heading-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="text-center">

                    <!-- Card -->
                    <!--Card Content -->
                    <div class="card-body d-flex flex-row">

                        <div>
                            <!-- Title -->
                            <!-- <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4> -->
                            <h2 class="heading__title">A Venture Catalyst</h2>
                            <!-- Subtitle -->
                            <!-- <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p> -->
                            <p class="heading__desc">A One-to-One Guidance - The traditional
                                accelerator/incubator model is like going to a group exercise
                                class: you’ll learn some things, but you may not get the personal support you truly
                                need</p>

                        </div>

                    </div>

                    <!-- Card content -->
                    <div class="collapse-content">

                        <!-- Text -->
                        <p class="card-text collapse" id="collapseContent">Front Row Labs is your personal trainer.
                            You’ll
                            learn, grow and succeed with
                            one-to-one support in an enriching
                            environment focused on winning. Front Row Labs has reinvented the ineffective early-stage
                            startup
                            model
                            to give young
                            tech companies a rock-solid foundation that builds a better chance at success. As an early-stage
                            startup, your focus
                            should be on getting past the crucial Series A round. We help you make it happen. As
                            hands-on
                            partners
                            and your embedded
                            executive team, we’re in the foxhole with you. We leverage our knowledge and connections to
                            get
                            your
                            company healthy,
                            get you in front of investors - and get the win.
                            The C-Suite, at Your Service - Front Row Labs provides startups with highly experienced
                            C-level
                            executives who work
                            side-by-side with you as true partners from strategy through execution.
                            Get Past The A-Round. Front Row Labs provides you with the comprehensive support you need to
                            secure
                            your
                            next round of
                            funding. From organizing your books to preparing you for investor pitches,
                            we’re in the front row making sure the I’s are dotted and the T’s are crossed.</p>
                        <!-- Button -->
                        <a class="btn btn__rounded btn__secondary btn__bordered collapsed" data-toggle="collapse"
                           href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                    </div>

                    <!-- Card -->

                </div>
            </div>
        </div>
    </div>
    </div>
</section> <!-- /.heading 3 -->

<!-- ======================
        banner 1
  ========================= -->
<section id="banner1" class="banner banner-1 video video-1 p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <picture class="bg-img">
                    <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/banners/3.webp" type="image/webp">
                    <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/3.png" alt="background">
                </picture>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6 bg-gray">
                <div class="inner-padding">
                    <div class="heading heading-2 text-center">
                        <div class="divider__line divider__theme mb-40"></div>
                        <h2 class="heading__title">Not just some advice</h2>
                        <p class="heading__desc">We do the work with you. We don’t just invest - we partner. We don’t
                            just drop
                            in - we’re there every day. We don’t bleed
                            you - we grow you. Our success is entirely dependent on yours, and we’re committed to
                            winning. Startups move too fast to
                            slow down for the learning curve - often failing as a result. Front Row Labs helps you turn
                            a great
                            idea
                            into a great
                            company by providing you with an executive team that has been there and done that - and
                            knows the recipe
                            for success.</p>
                    </div><!-- /.heading -->
                </div>
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
                        <h2 class="heading__title">Front Row&nbsp;Labs&nbsp;Corporate Innovation&nbsp;Center</h2>
                        <p class="heading__desc">Your Front Row Seat - That big idea you’re looking for can be tough to
                            see - especially from where you’re standing. Front
                            Row Labs offers you a space close to the action where you can feel the energy and
                            inspiration - and
                            discover that big
                            idea. Change Your Environment to Free Your Mind. If nothing changes, nothing changes. At
                            Front Row
                            Labs,
                            you’ll get out
                            of the office and into the laboratory. You’ll rub shoulders with other innovators - and have
                            that magic
                            rub off on you.
                            You’ll have access to a team of industry experts who offer knowledge, advice and an
                            alternative view
                            to
                            the status quo.</p>
                    </div><!-- /.heading -->
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/11.png" alt="background">
                </div>
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 1 -->


<!-- ======================
          banner 1
  ========================= -->
<section id="banner1" class="banner banner-1 video video-1 p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/12.png" alt="background">
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6 bg-gray">
                <div class="inner-padding">
                    <div class="heading heading-2 text-center">
                        <div class="divider__line divider__theme mb-40"></div>
                        <h2 class="heading__title">All of The&nbsp;Comforts of&nbsp;Creativity</h2>
                        <p class="heading__desc">From modern interior design to an onsite chef to next-gen technology
                            and
                            beyond,
                            Front Row Labs offers a space free from
                            distractions - and designed for creativity. Discover. Innovate. Succeed. Innovation is often
                            a product
                            of its
                            environment. At
                            Front Row Labs, the environment is teeming with creative energy that begets successful
                            innovations.
                        </p>
                    </div><!-- /.heading -->
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 1 -->


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
                        <h2 class="heading__title">An alternative to&nbsp;the&nbsp;urban
                            co&#8209;working&nbsp;model</h2>
                        <p class="heading__desc">Housed in the suburbs, where many employees of city-based companies
                            live, Front
                            Row Labs’ suburban workspace provides a
                            vibrant environment closer to home where employees can boost productivity and drive
                            innovation. <b>Scale
                            Your Workforce in
                                Real-Time</b>. The modern marketplace requires companies to be nimble, flexible, and fluid. Front
                            Row
                            Labs’
                            alternative
                            workspaces allow you to scale your workforce up and down when you need to - without spending
                            an enormous
                            sum to build new
                            space.
                        </p>
                    </div><!-- /.heading -->
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="bg-img"><img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/13.png" alt="background">
                </div>
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 1 -->


<!-- ======================
          banner 1
========================= -->
<section id="banner1" class="banner banner-1 video video-1 p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <picture class="bg-img">
                    <source srcset="<?php echo Yii::$app->homeUrl; ?>/images/banners/7.webp" type="image/webp">
                    <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/7.png" alt="background">
                </picture>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6 bg-gray">
                <div class="inner-padding">
                    <div class="heading heading-2 text-center">
                        <div class="divider__line divider__theme mb-40"></div>
                        <h2 class="heading__title">A Place for&nbsp;Collaboration and&nbsp;Inspiration</h2>
                        <p class="heading__desc">Our workspace is more than simply an office. It’s a hotbed of
                            collaboration
                            where
                            entrepreneurs can come together to
                            share ideas and inspiration. <b>Strategically Located</b> - Front Row Labs alternative workspaces
                            are
                            strategically located
                            between metropolitan areas where corporations are based, providing an easily accessible
                            satellite
                            office
                            in a relevant
                            geographic area.</p>
                    </div><!-- /.heading -->
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 1 -->


<!-- ========================
              contact 1
  =========================== -->
<section id="contact1" class="contact p-0">
    <div class="container-fluid col-padding-0">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                <?= $this->render('_contact-form', [
                    'model' => $model,
                    'page' => 'What We Do'
                ]); ?>
            </div>
            <!-- /.col-lg-6 -->

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="contact__banner align-v-h bg-overlay">
                    <div class="bg-img">
                        <img src="<?php echo Yii::$app->homeUrl; ?>/images/banners/9.png" alt="background">
                    </div>
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
