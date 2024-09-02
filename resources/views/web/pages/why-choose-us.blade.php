@extends('web.layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- ========================
       page title
    =========================== -->
    <section id="pageTitle" class="page-title page-title-layout2 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="web/assets/images/page-titles/13.webp" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <span class="pagetitle__subheading">World's Leading Packaging and Printing Industry Corporation!</span>
            <h1 class="pagetitle__heading">Providing Innovative and Sustainable Solutions </h1>
            <a href="#" class="btn btn__white btn__bordered btn__lg">Schedule An Appointment</a>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 1
    =========================== -->
    <section id="about1" class="about about-1 pt-120 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="carousel-wrap">
              <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1"
                data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="700">
                <img src="web/assets/images/about/2.2.jpeg" alt="about img" class="img-fluid">
                <img src="web/assets/images/about/1.1.webp" alt="about img" class="img-fluid">
              </div><!-- /.carousel -->
              <div class="counter-item counters-white">
                <div class="counter__icon"><i class="icon-worker-1"></i></div>
                <h4 class="counter">2,512</h4>
                <p class="counter__subtitle">Employees</p>
              </div><!-- /.counter-item -->
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-2 mt-50">
              <span class="heading__subtitle">World's Leading Packaging and Printing Industry Corporation!</span>
              <h2 class="heading__title">Providing Innovative & Sustainable Solutions</h2>
              <p class="heading__desc">Message to the Customers :-</p>
                <p>Dear Valued Customers,
                </p>
                <p>At JMB Packaging, our mission is simple—your satisfaction is our highest priority. We are committed to providing you with top-quality products and innovative services designed to meet and exceed your expectations. As we continue to grow and evolve, our dedication to delivering exceptional value remains steadfast. Thank you for trusting us to be your partner; we look forward to serving you with excellence and innovation, ensuring that your experience with us is nothing short of extraordinary."
                </p>
            </div><!-- /heading -->
            <img src="web/assets/images/ceo.png" alt="singnture" class="signature mr-30">
            <p>Founder and CEO</p>
            <a href="#" class="btn btn__default btn__bordered">More About Us</a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 1 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients" class="clients clients-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
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

    <!-- ===========================
      projects Carousel
    ============================= -->
    <section id="projectsCarousel" class="projects projects-carousel pt-120 pb-0">
      <div class="projects-bg bg-overlay">
        <div class="bg-img"><img src="web/assets/images/backgrounds/1.jpg" alt="background"></div>
      </div>
      <div class="container">
        <div class="row heading mb-30">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle">Building The Future, Restoring The Past</span>
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <h2 class="heading__title color-white">Reliable, Effective &Technically Advanced Products!</h2>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <p class="heading__desc color-white">JMB Packaging Engineering has been built on engineering excellence crafted
              through unstinted dedication to quality, innovation and a constant objective to serve the global market &
              decade young Packaging and Printing Industry expertise.</p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
              data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="700">
              <div class="project-item">
                <div class="project__img">
                  <img src="web/assets/images/case-studies/carousel/1.jpg" alt="project img" class="img-fluid">
                </div><!-- /.project-img -->
                <div class="project__content">
                  <div class="project__content-inner">
                    <h4 class="project__title"><a href="#">Highway Energy Station</a></h4>
                    <div class="project__cat">
                      <a href="#">Analystics</a><a href="#">Optimization</a>
                    </div><!-- /.project-cat -->
                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall spend
                      by utilizing an extensive consolidation.</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Explore Case Study</span>
                      <i class="icon-arrow-right2"></i>
                    </a>
                  </div><!-- /.project-content-inner -->
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
              <div class="project-item">
                <div class="project__img">
                  <img src="web/assets/images/case-studies/carousel/2.jpg" alt="project img" class="img-fluid">
                </div><!-- /.project-img -->
                <div class="project__content">
                  <div class="project__content-inner">
                    <h4 class="project__title"><a href="#">Regulatory Compliance Seminar</a></h4>
                    <div class="project__cat">
                      <a href="#">Energy</a><a href="#">Optimization</a>
                    </div><!-- /.project-cat -->
                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall spend
                      by utilizing an extensive consolidation schedule.</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Explore Case Study</span>
                      <i class="icon-arrow-right2"></i>
                    </a>
                  </div><!-- /.project-content-inner -->
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
              <div class="project-item">
                <div class="project__img">
                  <img src="web/assets/images/case-studies/carousel/3.jpg" alt="project img" class="img-fluid">
                </div><!-- /.project-img -->
                <div class="project__content">
                  <div class="project__content-inner">
                    <h4 class="project__title"><a href="#">Villy Manufacturing Inc</a></h4>
                    <div class="project__cat">
                      <a href="#">Analystics</a><a href="#">Engineering</a>
                    </div><!-- /.project-cat -->
                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall spend
                      by utilizing an extensive consolidation.</p>
                    <a href="#" class="btn btn__secondary btn__link">
                      <span>Explore Case Study</span>
                      <i class="icon-arrow-right2"></i>
                    </a>
                  </div><!-- /.project-content-inner -->
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="text__link">Innovative and Sustainable Solutions. <a href="#">Find your solution</a></p>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects Carousel -->


    <!-- =========================
            Testimonial #1
    =========================  -->
    <section id="testimonial1" class="testimonial testimonial-1 pt-40 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots carousel-dots-center" data-slide="2" data-slide-md="1"
              data-slide-sm="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="50" data-loop="true"
              data-speed="800">
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
                  <p class="testimonial__desc">I’ve seen great companies serving Packaging and Printing Industry solutions in my career. But
                    not to the point where you feel that comfort and trust that we get with JMB Packaging Company.</p>
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
                  <p class="testimonial__desc">Expertly trained team members who take the extra step and go the extra
                    mile, all to fulfill our promise, deliver innovative and dynamic solutions to our customers!</p>
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
                  <p class="testimonial__desc">I’ve seen great companies serving industry solutions in my career. But
                    not to the point where you feel that comfort and trust that we get with JMB Packaging Company.</p>
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
                  <p class="testimonial__desc">Expertly trained team members who take the extra step and go the extra
                    mile, all to fulfill our promise, deliver innovative and dynamic solutions to our customers!</p>
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
@endsection
