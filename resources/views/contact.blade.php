<!DOCTYPE html>
<html>
<head>
	<title></title>
	@extends('layouts.meta')
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	@extends('layouts.navbar')
	<div class="hero-wrap" style="background-image: url('images/ub.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Нүүр</a></span> <span>Холбоо барих</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Бидэнтэй холбогдох</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Холбоо барих мэдээлэл</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-4">
            <p><span>Хаяг:</span> UB 11000, MGL</p>
          </div>
          <div class="col-md-4">
            <p><span>Утас:</span> <a href="tel://1234567898">+ 1234 5678 98</a></p>
          </div>
          <div class="col-md-4">
            <p><span>Цахим шуудан:</span> <a href="mailto:info@yoursite.com">info@info.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Таньд ямар нэгэн асуулт байна уу?</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Таны нэр">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Цахим шуудан">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Гарчиг">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Бичвэр"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Илгээх" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>
	@extends('layouts.footer')
	<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

    
