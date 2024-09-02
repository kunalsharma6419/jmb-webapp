@extends('web.layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- ========================
       page title
    =========================== -->
    <section id="pageTitle" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="web/assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
            <span class="pagetitle__subheading">Building The Future, Restoring The Past</span>
            <h1 class="pagetitle__heading">Individually Assess Each Plan & Offer Optimal Solutions!</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

     <!-- ========================
                          About 2
                        =========================== -->
    <section id="about2" class="about about-2 pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9 offset-xl-1 ">
                    <div class="heading heading-3 mb-50">
                        <span class="heading__subtitle">Manufacture A Variety Of High Quality Products</span>
                        <h2 class="heading__title">A Leading Industrial & Manufacturing Company, Serving Since 1990.</h2>
                    </div><!-- /heading -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="about__text mt-30">
                        <p>CEO Message to team</p>
                        <p>Dear Team,
                            <br>
                            Our journey has always been about pushing boundaries and setting new standards in excellence. As
                            we move forward, our focus remains unwavering—delivering the highest quality products paired
                            with innovative services that exceed our customers' expectations. Together, we are not just
                            meeting needs but creating lasting value and building trust with every interaction. Your
                            dedication and passion are the driving forces behind our success, and I am confident that, with
                            our combined efforts, we will elevate the customer experience to unparalleled heights.
                            <br>
                            Let’s continue to innovate, excel, and achieve greatness together!"
                        </p>
                    </div>
                    <div class="signature mb-30">
                        <img src="web/assets/images/ceo.png" alt="singnture" class="signature">
                        <p>Founder and CEO</p>
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
                                <h4 class="feature__title">Quality Assurance</h4>
                                <p class="feature__desc">We adhere to strict quality control measures to ensure that our
                                    products meet the highest standards.
                                    clients.</p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item feature-list-item">
                            <div class="feature__content">
                                <h4 class="feature__title">Sustainability</h4>
                                <p class="feature__desc">Committed to reducing our environmental footprint, we offer a
                                    range of eco-friendly packaging solutions.
                                    truly reflect.</p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item feature-list-item">
                            <div class="feature__content">
                                <h4 class="feature__title">Customization</h4>
                                <p class="feature__desc">Our products can be tailored to your specific needs, ensuring the
                                    perfect fit for your branding and operational requirements.
                                </p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item feature-list-item">
                            <div class="feature__content">
                                <h4 class="feature__title">Customer Focus</h4>
                                <p class="feature__desc">Our team is dedicated to providing excellent service and support,
                                    ensuring a seamless experience from inquiry to delivery.
                                </p>
                            </div><!-- /.feature-content -->
                        </div><!-- /.feature-item -->
                    </div>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 2 -->

    <!-- =========================
       Banner 2
      =========================== -->
    <section id="banner2" class="banner banner-2 fancybox-white p-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 inner-padding  bg-overlay bg-overlay-theme bg-parallax">
            <div class="bg-img"><img src="web/assets/images/backgrounds/2.jpg" alt="background"></div>
            <div class="heading heading-2 mb-50">
              <span class="heading__subtitle color-white">World's Leading Packaging and Printing Industry Corporation!</span>
              <h3 class="heading__title color-white">Providing Innovative and Sustainable Solutions</h3>
              <p class="heading__desc color-white">As a diversified construction management, design-build, and general
                contracting firm, JMB Packaging Group is recognized as one of the World's leading Packaging and Printing Industry and Manufacturing
                Corporation! JMB Packaging Group has been building relationships and projects that last. Serving an
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
            <div class="carousel-wrap ">
              <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
                data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="700">
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
            <div class="bg-img"><img src="web/assets/images/backgrounds/2.jpg" alt="background">
            </div><!-- /.col-lg-6 -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. Banner 2 -->

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
              data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
              <div class="project-item">
                <div class="project__img">
                  <img src="web/assets/images/platforms/1.jpg" alt="project img">
                </div><!-- /.project-img -->
                <div class="project__content">
                  <h4 class="project__title"><a href="#">OFFSET</a></h4>
                  <p class="project__desc">Through our collection of state of the art Offset Printing Presses, we deliver unmatched quality and innovation to our customers.</p>
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
                  <p class="project__desc">Our state-of-the-art Gravure Technology for Flexibles, Tobacco as well as carton manufacturing offers a plethora of differentiated product.</p>
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
                  <p class="project__desc">Our advanced Flexo Printing Press coupled with our unmatched corrugation capabilities deliver superior packaging for consumer electronics and lifestyle products.</p>
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
                  <p class="project__desc">We are renowned for developing Value Additions to our customer's packaging through innovations in packaging functionality, texture and security.</p>
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
            <p class="text__link mb-0">Innovative and Sustainable Solutions. <a href="#">Find your solution</a></p>
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
            <p class="heading__desc color-white">JMB Packaging Engineering has been built on engineering excellence crafted
              through unstinted dedication to quality, innovation and a constant objective to serve the global market &
              decade young Packaging and Printing Industry expertise.</p>
          </div><!-- /.col-lg-6-->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">Quality Control System</h4>
                <p class="feature__desc">Following the quality of our service thus having gained trust of our many
                  clients.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">100% Satisfaction Guarantee</h4>
                <p class="feature__desc">An integrated approach to providing engineering services allows our clients to
                  benefit from the commercial and logistical advantages.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">Highly Professional Staff</h4>
                <p class="feature__desc">We are one of the Nations largest automotive parts recyclers and a widely
                  recognized leader utilizing advanced computerized techniques.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">Accurate Testing Processes</h4>
                <p class="feature__desc">We’ll work with you on your project, large or small. Together we’ll fine-tune
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
                  <p class="request__panel-desc">Our worldwide presence ensures the timeliness, cost efficiency
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
                      <p class="request__form-desc">Complete control over products allows us to ensure our customers
                        receive the best quality prices and service. We take great pride in everything that we do</p>
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
              <span class="font-bold color-theme">+55 654 541 17</span></p>
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
@endsection
