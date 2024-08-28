@extends('web.layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- ============================
                Slider
            ============================== -->
    <section id="slider1" class="slider slider-1">
        <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1"
            data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="3000"
            data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="web/assets/images/sliders/1.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-5">
                            <div class="slide__content">
                                <h2 class="slide__title">Industry Printing Solutions!</h2>
                                <p class="slide__desc">To further develop our corporate strengths we have established a
                                    corporate
                                    mandate to maintain strong core values that truly reflect the companys philosophy.</p>
                                <a href="#" class="btn btn__white mr-40">Our Services</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <span class="video__player-animation video__player-animation-2"></span>
                                        <span class="video__player-animation video__player-animation-3"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-5 -->
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 offset-xl-4">
                            <div class="slider__panel d-none d-lg-block">
                                <div class="slider__panel-icon">
                                    <i class="icon-manufacturing-plant"></i>
                                </div>
                                <h3 class="slider__panel-title">Our Mission</h3>
                                <p class="slider__panel-desc">Utilising latest processing solutions, and decades of work
                                    experience.
                                </p>
                                <a href="#" class="btn btn__primary btn__link">
                                    <span>Explore</span>
                                    <i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.slider-panel -->
                        </div><!-- /.col-xl-5 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="web/assets/images/sliders/2.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-5">
                            <div class="slide__content">
                                <h2 class="slide__title">Reliable Effective </h2>
                                <p class="slide__desc">To further develop our corporate strengths we have established a
                                    corporate
                                    mandate to maintain strong core values that truly reflect the companys philosophy.</p>
                                <a href="#" class="btn btn__white mr-40">Our Services</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <span class="video__player-animation video__player-animation-2"></span>
                                        <span class="video__player-animation video__player-animation-3"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-5 -->
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 offset-xl-4">
                            <div class="slider__panel d-none d-lg-block">
                                <div class="slider__panel-icon">
                                    <i class="icon-wheel"></i>
                                </div>
                                <h3 class="slider__panel-title">Our Vision</h3>
                                <p class="slider__panel-desc">Utilising latest processing solutions, and decades of work
                                    experience.
                                </p>
                                <a href="#" class="btn btn__primary btn__link">
                                    <span>Explore</span>
                                    <i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.slider-panel -->
                        </div><!-- /.col-xl-5 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="web/assets/images/sliders/3.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-5">
                            <div class="slide__content">
                                <h2 class="slide__title">Safety & Integrity</h2>
                                <p class="slide__desc">To further develop our corporate strengths we have established a
                                    corporate
                                    mandate to maintain strong core values that truly reflect the companys philosophy.</p>
                                <a href="#" class="btn btn__primary mr-40">Our Services</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <span class="video__player-animation video__player-animation-2"></span>
                                        <span class="video__player-animation video__player-animation-3"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-5 -->
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 offset-xl-4">
                            <div class="slider__panel d-none d-lg-block">
                                <div class="slider__panel-icon">
                                    <i class="icon-container"></i>
                                </div>
                                <h3 class="slider__panel-title">Our Values</h3>
                                <p class="slider__panel-desc">Designing, planning, construction & infrastructures management
                                    such.</p>
                                <a href="#" class="btn btn__primary btn__link">
                                    <span>Explore</span>
                                    <i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.slider-panel -->
                        </div><!-- /.col-xl-5 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ===========================
              Features Layout 2
            ============================= -->
    <section id="featuresLayout2" class="features features-Layout2 pt-0 pb-120">
        <div class="container">
            <div class="row features-wrap">
                <!-- feature item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-3 feature-item">
                    <div class="feature__content">
                        <h4 class="feature__title">Environmental Sensitivity</h4>
                        <p class="feature__desc">The world of international supply chains involves a myriad of unknown
                            risks and
                            challenging regulations.</p>
                        <a href="#" class="feature__link"> <i class="icon-arrow-right2"></i></a>
                    </div><!-- /.feature-content -->
                </div><!-- /.col-lg-3 -->
                <!-- feature item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-3 feature-item">
                    <div class="feature__content">
                        <h4 class="feature__title">Transparent Pricing</h4>
                        <p class="feature__desc">You can make use the easy payment options, listed below, that are
                            available in your country.</p>
                        <a href="#" class="feature__link"> <i class="icon-arrow-right2"></i></a>
                    </div><!-- /.feature-content -->
                </div><!-- /.col-lg-3 -->
                <!-- feature item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-3 feature-item">
                    <div class="feature__content">
                        <h4 class="feature__title">Professional & Qualified</h4>
                        <p class="feature__desc">We enhance our Packaging and Printing operations by relieving you of the
                            worries associated
                            with freight forwarding.</p>
                        <a href="#" class="feature__link"> <i class="icon-arrow-right2"></i></a>
                    </div><!-- /.feature-content -->
                </div><!-- /.col-lg-3 -->
                <!-- feature item #4 -->
                <div class="col-sm-12 col-md-6 col-lg-3 feature-item">
                    <div class="feature__content">
                        <h4 class="feature__title">Personalised Solutions</h4>
                        <p class="feature__desc">Our facilities meet high security requirements and are certified to the
                            highest
                            local standards.</p>
                        <a href="#" class="feature__link"> <i class="icon-arrow-right2"></i></a>
                    </div><!-- /.feature-content -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->


    <!-- ========================
              About 2
            =========================== -->
    <section id="about2" class="about about-2 pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9 offset-xl-1 ">
                    <div class="heading heading-3 mb-50">
                        <span class="heading__subtitle">Manufacture A Variety Of High Quality Products</span>
                        <h2 class="heading__title">A Leading Industrial & Manufacturing Company, Serving Since 1997.</h2>
                    </div><!-- /heading -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="about__text mt-30">
                        <p>JMB Packaging Group is a representative Industrial Construction operator providing full range of
                            service in
                            the sphere of Mechanical Engineering worldwide.</p>
                        <p>The world is changing faster than ever before, business is no exception. JMB Packaging industries
                            are
                            threatened as technology disrupts and software “eats the world.” Yet those that embrace change
                            are
                            thriving, building bigger, better, faster, and stronger products than ever before. You are
                            helping to
                            lead the charge; we can help you build on your past successes and prepare for future.</p>
                    </div>
                    <div class="signature mb-30">
                        <img src="web/assets/images/about/singnture.png" alt="singnture" class="signature">

                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-8 col-lg-5">
                    <div class="about__img">
                        <img src="web/assets/images/about/3.jpg" alt="about" class="img-fluid">
                        <a href="https://www.youtube.com/watch?4=&v=TKnufs85hXk" class="btn btn__primary popup-video">
                            <i class="fa fa-play"></i><span>Watch Video!</span>
                        </a>
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="features-list features-list-layout1 mt-30">
                        <div class="feature-item feature-list-item">
                            <div class="feature__content">
                                <h4 class="feature__title">Quality</h4>
                                <p class="feature__desc">Following the quality of our service thus having gained trust of
                                    our many
                                    clients.</p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item feature-list-item">
                            <div class="feature__content">
                                <h4 class="feature__title">Reliability</h4>
                                <p class="feature__desc">We have established a corporate mandate to maintain strong core
                                    values that
                                    truly reflect.</p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item feature-list-item">
                            <div class="feature__content">
                                <h4 class="feature__title">Innovation</h4>
                                <p class="feature__desc">Our company develops a unique dynamically and keeps in step with
                                    the times.
                                </p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                    </div>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 2 -->

    <!-- ========================
                Services Layout 3
            =========================== -->
    <section id="servicesLayout3" class="services services-layout3 pt-120 pb-120 bg-gray">
        <div class="container">
            <div class="row heading mb-40">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <span class="heading__subtitle">The Best Packaging and Printing And Company Services</span>
                    <h2 class="heading__title">Provides High Performance Services For Multiple Industries And Technologies!
                    </h2>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="heading__desc">JMB Packaging Engineering has been built on engineering excellence crafted
                        through unstinted dedication to quality, innovation and a constant objective to serve the global
                        market &
                        decade young Packaging and Printing expertise.</p>
                    <a href="#" class="btn btn__primary btn__lg mt-30">Schedule An Appointment</a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="container col-padding-0">
            <div class="row service-items-wrap">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service__content">
                            <div class="service__icon"><img src="./web/assets/images/icons/fmcg.jpeg"
                                    style="width: 150px; height: 150px;"></div>
                            <h4 class="service__title">FMCG </h4>
                            <p class="service__desc">Fast-moving consumer goods, also known as consumer packaged goods, are
                                products that are sold quickly and at a relatively low cost. Examples include non-durable
                                household goods such as packaged foods</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.service-content -->
                        <div class="service__img">
                            <img src="web/assets/images/services/1.1.jpeg" alt="service" class="img-fluid">
                            <div class="service__overlay"><a href="#" class="zoom__icon"></a></div>
                        </div><!-- /.service-img -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service__content">
                            <div class="service__icon"><img src="./web/assets/images/icons/agriculture.jpeg"
                                    style="width: 150px; height: 150px;"></div>
                            <h4 class="service__title">Agriculture</h4>
                            <p class="service__desc">The development of agriculture enabled the human population to grow
                                many times larger than could be sustained by hunting and gathering. Agriculture began
                                independently in different parts of the globe</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.service-content -->
                        <div class="service__img">
                            <img src="web/assets/images/services/2.2.jpeg" alt="service" class="img-fluid h-[8rem]">
                            <div class="service__overlay"><a href="#" class="zoom__icon"></a></div>
                        </div><!-- /.service-img -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service__content">
                            <div class="service__icon"><img src="./web/assets/images/icons/retail.jpeg"
                                    style="width: 150px; height: 150px;"></div>
                            <h4 class="service__title">Retail</h4>
                            <p class="service__desc">Retail is the sale of goods and services to consumers, in contrast to
                                wholesaling, which is the sale to business or institutional customers. A retailer purchases
                                goods in large quantities from manufacturers directly or through a wholesaler,</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.service-content -->
                        <div class="service__img">
                            <img src="web/assets/images/services/3.3.jpeg" alt="service" class="img-fluid">
                            <div class="service__overlay"><a href="#" class="zoom__icon"></a></div>
                        </div><!-- /.service-img -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service__content">
                            <div class="service__icon"><img src="./web/assets/images/icons/food.jpeg"
                                    style="width: 150px; height: 150px;"></div>
                            <h4 class="service__title">Food & Beverages</h4>
                            <p class="service__desc">Food and Beverage Services can be broadly defined as the process of
                                preparing, presenting and serving of food and beverages to the customers. F&B Services can
                                be of the following two types − 1. On Premise − Food is delivered where it is prepared</p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.service-content -->
                        <div class="service__img">
                            <img src="web/assets/images/services/4.4.jpeg" alt="service" class="img-fluid">
                            <div class="service__overlay"><a href="#" class="zoom__icon"></a></div>
                        </div><!-- /.service-img -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 3 -->

    <!-- =========================
               Banner 2
              =========================== -->
    <section id="banner2" class="banner banner-2 fancybox-white p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 inner-padding  bg-overlay bg-overlay-theme bg-parallax">
                    <div class="bg-img"><img src="web/assets/images/backgrounds/2.jpg" alt="background"></div>
                    <div class="heading heading-2 mb-50">
                        <span class="heading__subtitle color-white">World's Leading Packaging and Printing
                            Corporation!</span>
                        <h3 class="heading__title color-white">Providing Innovative and Sustainable Solutions</h3>
                        <p class="heading__desc color-white">As a diversified construction management, design-build, and
                            general
                            contracting firm, JMB Packaging Group is recognized as one of the World's leading Packaging and
                            Printing and Manufacturing
                            Corporation! JMB Packaging Group has been building relationships and projects that last. Serving
                            an
                            impressive list of long-term clients with experience and expertise in multiple industries.</p>
                    </div><!-- /.heading -->
                    <div class="row">
                        <!-- fancybox item #1 -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-waste"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Environmental <br> Sensitivity</h4>
                                    <div class="divider__line divider__sm divider__white"></div>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->
                        <!-- fancybox item #2 -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-gears-1"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Personalised <br> Solutions</h4>
                                    <div class="divider__line divider__sm divider__white"></div>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->
                        <!-- fancybox item #3 -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-management"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Performance <br> Measures</h4>
                                    <div class="divider__line divider__sm divider__white"></div>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay bg-overlay-4">
                    <div class="carousel-wrap">
                        <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1"
                            data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0"
                            data-loop="true" data-speed="700">
                            <div class="item">
                                <div class="counter-item counters-white">
                                    <div class="counter__icon"><i class="icon-valve"></i></div>
                                    <h4 class="counter">6,154</h4>
                                    <p class="counter__subtitle">Projects</p>
                                    <p class="counter__desc">Utilising latest processing solutions, and decades of work
                                        experience.</p>
                                </div><!-- /.counter-item -->
                            </div>
                            <div class="item">
                                <div class="counter-item counters-white">
                                    <div class="counter__icon"><i class="icon-worker-1"></i></div>
                                    <h4 class="counter">2,512</h4>
                                    <p class="counter__subtitle">Employees</p>
                                    <p class="counter__desc">Utilising latest processing solutions, and decades of work
                                        experience.</p>
                                </div><!-- /.counter-item -->
                            </div>
                        </div><!-- /.carousel -->
                    </div>
                    <div class="bg-img"><img src="web/assets/images/banners/8.jpeg" alt="background">
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /. Banner 2 -->

    <!-- ======================
              Solutions Grid
            ========================= -->
    <section id="blogGrid" class="blog blog-grid pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Solutions we Provide</span>
                        <h2 class="heading__title">Packaging Solutions</h2>
                        <div class="divider__line divider__theme divider__center mb-0"></div>
                        <p class="heading__desc">Our business offers a comprehensive range of products built by
                            transforming Paperboard, Paper and Films into consumer branded products, making us your “one
                            stop shop” for packaging solutions. </p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row-->
            <div class="row">
                <!-- Blog Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/solutions/1.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <h4 class="blog__title"><a href="#">CARTON PACKAGING</a></h4>
                            <p class="blog__desc">We are a Market Leader in this space catering to a variety of needs
                                across the FMCG, liquor, consumer electronics, automobiles, home care, pharmaceuticals and
                                lifestyle product sectors, through a diversified portfolio of value-added products aimed at
                                making your brand and products stand out.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/solutions/2.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <h4 class="blog__title"><a href="#">FLEXIBLES PACKAGING</a></h4>
                            <p class="blog__desc">Our end-to-end integrated solutions of conventional as well as
                                eco-friendly laminates built through a range of structural innovation using in-house
                                coatings and customized recipes guarantee best-in-class aesthetic value along with superior
                                in-built security features.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/solutions/3.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <h4 class="blog__title"><a href="#">FOOD PACKETS PACKAGING</a></h4>
                            <p class="blog__desc">Food packaging plays a critical role in maintaining product freshness,
                                safety, and longevity. Our Food Packets Packaging solutions are designed to ensure optimal
                                protection against contamination, while also extending shelf life. Using high-quality,
                                food-safe materials, we cater to a wide range of food products, offering versatile options
                                like flexible pouches, vacuum-sealed packs, and environmentally friendly packaging.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row-->
            <div class="row">
                <!-- Blog Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/solutions/6.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <h4 class="blog__title"><a href="#">ADHESIVE LABELS</a></h4>
                            <p class="blog__desc">We are a Top Supplier of value added self-adhesive metallic,
                                non-metallic, foil-stamped, security and anti-counterfeit, heat and pressure sensitive
                                labels and a variety of shrink sleeves.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/solutions/4.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <h4 class="blog__title"><a href="#">CORRUGATED, RIGID BOXES</a></h4>
                            <p class="blog__desc">We are a partner-of-choice in this segment, providing superior quality
                                large format Flexo printed packaging integrated with high quality micro-fluting for leading
                                lifestyle products and shelf-ready packs. We also have the best-in-class technology in rigid
                                box manufacturing for luxury segments.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="web/assets/images/solutions/5.jpg" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <h4 class="blog__title"><a href="#">Quick service restaurant</a></h4>
                            <p class="blog__desc">Our products are business – enablers for the fast evolving QSR segment.
                                We directly address the primary kitchen-to-consumer pain-points of QSR players, by bringing
                                to them a wide range of plastic free solutions in clamshell and tub & lid formats with Germ
                                Free technology focussed on consumer health and safety.
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right2"></i>
                            </a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
    <!-- =========================
              projects carousel 3
              =========================== -->
    <section id="projectsCarousel3" class="projects-carousel-3 pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Explore Recent Works</span>
                        <h2 class="heading__title">Multiple Technology Platforms</h2>
                        <div class="divider__line divider__theme divider__center"></div>
                    </div><!-- /heading -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1"
                        data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                        data-speed="800">
                        <div class="project-item">
                            <div class="project__img">
                                <img src="web/assets/images/platforms/1.jpg" alt="project img">
                            </div><!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">OFFSET</a></h4>
                                <p class="project__desc">Through our collection of state of the art Offset Printing
                                    Presses, we deliver unmatched quality and innovation to our customers.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Explore Case Study</span><i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.project-content -->
                        </div><!-- /.project-item -->
                        <div class="project-item">
                            <div class="project__img">
                                <img src="web/assets/images/platforms/2.jpg" alt="project img">
                            </div><!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">GRAVURE</a></h4>
                                <p class="project__desc">Our state-of-the-art Gravure Technology for Flexibles, Tobacco as
                                    well as carton manufacturing offers a plethora of differentiated product.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Explore Case Study</span><i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.project-content -->
                        </div><!-- /.project-item -->
                        <div class="project-item">
                            <div class="project__img">
                                <img src="web/assets/images/platforms/3.jpg" alt="project img">
                            </div><!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">FLEXO</a></h4>
                                <p class="project__desc">Our advanced Flexo Printing Press coupled with our unmatched
                                    corrugation capabilities deliver superior packaging for consumer electronics and
                                    lifestyle products.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Explore Case Study</span><i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.project-content -->
                        </div><!-- /.project-item -->
                        <div class="project-item">
                            <div class="project__img">
                                <img src="web/assets/images/platforms/4.jpg" alt="project img">
                            </div><!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">Value Addition</a></h4>
                                <p class="project__desc">We are renowned for developing Value Additions to our customer's
                                    packaging through innovations in packaging functionality, texture and security.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Explore Case Study</span><i class="icon-arrow-right2"></i>
                                </a>
                            </div><!-- /.project-content -->
                        </div><!-- /.project-item -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-40">
                    <p class="text__link mb-0">Innovative and Sustainable Solutions. <a href="#">Find your
                            solution</a></p>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.projects carousel 3 -->

    <!-- ========================
              Features List  2
            =========================== -->
    <section id="featuresListLayout2"
        class="features-list features-list-layout2 bg-overlay bg-overlay-gradient bg-parallax pt-120">
        <div class="bg-img"><img src="web/assets/images/backgrounds/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row heading mb-30">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="heading__subtitle">Why Choose Our Services?</span>
                </div><!-- /.col-lg-12-->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading__title color-white">Reliable, Effective &Technically Advanced Products!</h2>
                </div><!-- /.col-lg-6-->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="heading__desc color-white">JMB Packaging Engineering has been built on engineering excellence
                        crafted
                        through unstinted dedication to quality, innovation and a constant objective to serve the global
                        market &
                        decade young Packaging and Printing expertise.</p>
                </div><!-- /.col-lg-6-->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="feature-item feature-list-item">
                        <div class="feature__content">
                            <h4 class="feature__title">Quality Control System</h4>
                            <p class="feature__desc">Following the quality of our service thus having gained trust of our
                                many
                                clients.</p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.feature-item -->
                    <div class="feature-item feature-list-item">
                        <div class="feature__content">
                            <h4 class="feature__title">100% Satisfaction Guarantee</h4>
                            <p class="feature__desc">An integrated approach to providing engineering services allows our
                                clients to
                                benefit from the commercial and logistical advantages.</p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="feature-item feature-list-item">
                        <div class="feature__content">
                            <h4 class="feature__title">Highly Professional Staff</h4>
                            <p class="feature__desc">We are one of the Nations largest automotive parts recyclers and a
                                widely
                                recognized leader utilizing advanced computerized techniques.</p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.feature-item -->
                    <div class="feature-item feature-list-item">
                        <div class="feature__content">
                            <h4 class="feature__title">Accurate Testing Processes</h4>
                            <p class="feature__desc">We’ll work with you on your project, large or small. Together we’ll
                                fine-tune
                                your new construction, remodeling or renovation plans...</p>
                        </div><!-- /.feature-content -->
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features List 2 -->

    <!-- ========================
              Request Quote  2
            =========================== -->
    <section id="requestQuote" class="request-quote-2 pt-0 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="request-quote-panel">
                        <div class="request__panel-banner bg-overlay bg-overlay-theme">
                            <div class="bg-img"><img src="web/assets/images/banners/2.jpg" alt="banner"></div>
                            <div class="request__panel-banner-inner">
                                <h5 class="request__panel-title">Dedicated Customer Teams & An Agile Services</h5>
                                <p class="request__panel-desc">Our worldwide presence ensures the timeliness, cost
                                    efficiency
                                    and compliance adherence required to ensure your production timelines are met.</p>
                                <button class="btn btn__secondary btn__hover2">
                                    <i class="icon-printer"></i><span>Download 2019 Brochure</span>
                                </button>
                            </div><!-- /.request-panel-banner-inner -->
                        </div><!-- /.request-panel-banner -->
                        <div class="request__form mb-0">
                            <div class="request__form-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="request__form-title">Request A Quote</h4>
                                        <p class="request__form-desc">Complete control over products allows us to ensure
                                            our customers
                                            receive the best quality prices and service. We take great pride in everything
                                            that we do</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group form-group-select">
                                            <select class="form-control">
                                                <option>Select Your Industry</option>
                                                <option>Industry 1</option>
                                                <option>Industry 2</option>
                                            </select>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Additional Details!"></textarea>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <button class="btn btn__secondary">Submit Request</button>
                                    </div><!-- /.col-lg-12 -->
                                </div>
                            </div><!-- /.request-form-body -->
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-40">
                    <p class="text__link mb-0">We will get back to you within 24 hours, or call us
                        <span class="font-bold color-theme">+55 654 541 17</span>
                    </p>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Request Quote -->

    <!-- =========================
                    Testimonial #1
            =========================  -->
    <section id="testimonial1" class="testimonial testimonial-1 pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-dots carousel-dots-center" data-slide="2"
                        data-slide-md="1" data-slide-sm="1" data-autoplay="false" data-nav="false" data-dots="true"
                        data-space="50" data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="web/assets/images/testimonials/thumbs/3.jpg" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">Martin Hope</h5>
                                <p class="testimonial__meta-desc">Pro Dust</p>
                            </div><!-- /.testimonial-meta -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc">I’ve seen great companies serving Packaging and Printing
                                    solutions in my career. But
                                    not to the point where you feel that comfort and trust that we get with JMB Packaging
                                    Company.</p>
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonial-rating -->
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="web/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">John Peter</h5>
                                <p class="testimonial__meta-desc">Dustic</p>
                            </div><!-- /.testimonial-meta -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Expertly trained team members who take the extra step and go
                                    the extra
                                    mile, all to fulfill our promise, deliver innovative and dynamic solutions to our
                                    customers!</p>
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonial-rating -->
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="web/assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">Martin Hope</h5>
                                <p class="testimonial__meta-desc">Pro Dust</p>
                            </div><!-- /.testimonial-meta -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc">I’ve seen great companies serving Packaging and Printing
                                    solutions in my career. But
                                    not to the point where you feel that comfort and trust that we get with JMB Packaging
                                    Company.</p>
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonial-rating -->
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="web/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">John Peter</h5>
                                <p class="testimonial__meta-desc">Dustic</p>
                            </div><!-- /.testimonial-meta -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Expertly trained team members who take the extra step and go
                                    the extra
                                    mile, all to fulfill our promise, deliver innovative and dynamic solutions to our
                                    customers!</p>
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonial-rating -->
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonial1 -->

    <!-- =====================
                 Clients 1
              ======================== -->
    <section id="clients" class="clients clients-1 border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2"
                        data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true"
                        data-speed="700">
                        <div class="client">
                            <a href="#"><img src="web/assets/images/clients/9.png" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="web/assets/images/clients/10.png" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="web/assets/images/clients/11.png" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="web/assets/images/clients/12.png" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="web/assets/images/clients/13.png" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="web/assets/images/clients/11.png" alt="client"></a>
                        </div><!-- /.client -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    <!-- =========================
               Banner 4
              =========================== -->
    <section id="banner4" class="banner banner-4 pt-120 pb-120">
        <div class="bg-img"><img src="web/assets/images/banners/1.png" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9 offset-lg-3 col-xl-7 offset-xl-5">
                    <div class="banner-content">
                        <div class="heading heading-3 heading-white mb-30">
                            <span class="heading__subtitle">Building The Future, Restoring The Past</span>
                            <h2 class="heading__title">Individually Assess Each Plan And Offer Optimal Solutions!</h2>
                            <p class="heading__desc">Serving an impressive list of long-term clients with experience and
                                expertise
                                in multiple industries.</p>
                        </div><!-- /.heading -->
                        <a href="#" class="btn btn__white btn__hover2">Our Services</a>
                    </div>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /. Banner 4 -->
@endsection
