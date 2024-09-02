@extends('web.layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- ========================
                   page title
                =========================== -->
    <section id="pageTitle" class="page-title page-title-layout6 bg-overlay bg-parallax">
        <div class="bg-img"><img src="web/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Frequently Asked Questions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-12-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
                   FAQ
                ========================= -->
    <section id="faq" class="faq pt-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">What Are You Looking For?</span>
                        <h2 class="heading__title">Frequently Asked Questions</h2>
                        <div class="divider__line divider__theme divider__center mb-0"></div>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row" id="accordion">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                            <a class="accordion__item-title" href="#">What types of materials do you use for your
                                packaging?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse1" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>We use high-quality, durable materials, including recyclable and biodegradable options.
                                </p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                            <a class="accordion__item-title" href="#">Can you provide custom sizes and designs for
                                bags?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse2" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p> Yes! We offer customization options for sizes and designs to meet your specific needs.
                                </p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item opened">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                            <a class="accordion__item-title" href="#">What is your approach to sustainability?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse3" class="collapse show" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>We prioritize eco-friendly materials and sustainable practices in our production
                                    processes.
                                </p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse4">
                            <a class="accordion__item-title" href="#">What if I pick the wrong plan?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse4" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse5">
                            <a class="accordion__item-title" href="#">Any contracts or commitments?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse5" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse6">
                            <a class="accordion__item-title" href="#">What are my payment options?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse6" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse7">
                            <a class="accordion__item-title" href="#">How does the free trial work?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse7" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse8">
                            <a class="accordion__item-title" href="#">What Payment Methods Are Available?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse8" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse9">
                            <a class="accordion__item-title" href="#">How does the free trial work?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse9" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item opened">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse10">
                            <a class="accordion__item-title" href="#">If I have questions, where can I find answers?
                            </a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse10" class="collapse show" data-parent="#accordion">
                            <div class="accordion__item-body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <p class="text__link mb-0">Couldn’t find your answer? <a href="#">Contact Us Now</a></p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.FAQ -->

    <!-- ==========================
                    contact 2
                =========================== -->
    <section id="contact2" class="contact contact-2 p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="contact-panels-wrap">
                        <div class="contact-panel mb-40">
                            <h6 class="contact__panel-title">Contact Details</h6>
                            <ul class="contact__panel-list list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span>AIDC, Nowapara,Manikpur, Dist Bongaigaon, Assam,
                                        Pin- 783392</span>
                                </li>
                                <li><i class="fa fa-envelope"></i><span>Email: <a
                                            href="mailto:buildwellpackaging@gmail.com" class="__cf_email__"
                                            data-cfemail="024b6c667771766b6142356d706d6d642c616d6f">buildwellpackaging@gmail.com</a></span>
                                </li>
                                <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:buildwellpipes@gmail.com"
                                            class="__cf_email__"
                                            data-cfemail="1950777d6c6a6d707a592e766b76767f377a7674">buildwellpipes@gmail.com</a></span>
                                </li>
                                <li><i class="fa fa-phone"></i><span>+91 9435460099</span></li>
                                <li><i class="fa fa-phone"></i><span>+91 8882361616</span></li>
                            </ul>
                        </div>
                        <div class="contact-panel">
                            <h6 class="contact__panel-title">Opening Hours</h6>
                            <ul class="contact__panel-list contact__panel-list-2 list-unstyled">
                                <li><span>Monday-Friday</span><span>10:00 - 18:00</span></li>
                                <li><span>Saturday</span><span>10:00 - 14:00</span></li>
                                <li><span>Sunday</span><span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.8105940987175!2d90.75669507942388!3d26.461833619829374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37590885e0013eb7%3A0xab41615711408a2c!2sNowapara%20Number%201%20Rd%2C%20Assam%20783392!5e0!3m2!1sen!2sin!4v1725262141740!5m2!1sen!2sin"
            height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="web/assets/js/google-map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap" async
            defer></script>
    </section><!-- /.contact 2 -->

    <!-- =====================
                   Clients 1
                ======================== -->
    <section id="clients" class="clients clients-1">
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
@endsection
