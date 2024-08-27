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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


    <!-- ==========================
        contact 1
    =========================== -->
    <section id="contact1" class="contact pt-120 pb-110">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title">Contact Details</h6>
              <p>We’d love to hear from you! Whether you have questions about our products, need assistance with your order, or want to discuss custom solutions, feel free to reach out.</p>
              <ul class="contact__panel-list list-unstyled">
                <li><i class="fa fa-map-marker"></i><span>Brooklyn, New York 11226 United States.</span></li>
                <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:buildwellpackaging@gmail.com" class="__cf_email__" data-cfemail="1950777d6c6a6d707a592e766b76767f377a7674">buildwellpackaging@gmail.com</a></span></li>
                <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:buildwellpipes@gmail.com" class="__cf_email__" data-cfemail="1950777d6c6a6d707a592e766b76767f377a7674">buildwellpipes@gmail.com</a></span></li>
                <li><i class="fa fa-phone"></i><span>+91 9435460099</span></li>
                <li><i class="fa fa-phone"></i><span>+91 8882361616</span></li>
              </ul>
            </div>
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title">Opening Hours</h6>
              <ul class="contact__panel-list contact__panel-list-2 list-unstyled">
                <li><span>Monday-Friday</span><span>10:00 - 18:00</span></li>
                <li><span>Saturday</span><span>10:00 - 14:00</span></li>
                <li><span>Sunday</span><span>Closed</span></li>
              </ul>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form>
              <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Website"></div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__hover3 btn__block">Submit</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->
    <!-- =========================
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
      <div id="map"></div>
      <script src="web/assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap"
        async defer></script>
    </section><!-- /.GoogleMap -->

@endsection
