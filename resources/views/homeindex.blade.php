<!DOCTYPE html>
<html>
  <head>
    <title></title>
    
    <link rel="stylesheet" href="css/style.css">
    @extends('layouts.meta')
  </head>
  <body>
    
  @extends('layouts.navbar') 
    
    <div class="hero-wrap" style="background-image: url('images/ub.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Go Fund</h1>

            <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Bla Video</a></p>
            -->
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section" style="display: none;">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Хандив өгөх</h3>
                <p>Test test test Test test Test Test test test.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Төслийн сан бий болгох</h3>
                <p>Test test test Test test test.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Төслөө хэрэгжүүлэх</h3>
                <p>Test test test Test test test.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Туршилт шинэ орсон төслүүд</h2></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="carousel-cause owl-carousel">
            @foreach($projects as $project)
            <div class="item">
              <div class="cause-entry">
                <a href="{{'single/'.$project->id}}" class="img" style="background-image: url(images/ub1.jpg);"></a>
                <div class="text p-3 p-md-4">
                    <div style="font-size:2vw;"><a href="{{'single/'.$project->id}}">{{ $project->title }}</a></div>
                    <p>{{ str_limit($project->shortsummary,'50') }}</p>
                    <span class="donation-time mb-3 d-block">Сүүлийн хандив 1 цагийн өмна</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $project->am }}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-left">
                      <a href="" style="font-size: 14px;">Дэлгэрэнгүй</a >
                    </div>
                    <div class="text-right" style="margin-top: -30px;">
                      <a class="btn btn-primary" href="{{'check_out/'.$project->id}}" target="_blank" >Хандив өгөх</a>
                    </div>
                    <span class="fund-raised d-block">{{ $project->amount }} аас {{ $project->raised }}</span>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

       

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Шинэ мэдээлэл Recent news</h2>
            <p>ы</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/ub1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#"></a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/ub1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#"></a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/ub1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#"></a></h3>
                <p></p>
              </div>
            </div>
          </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>