<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    @extends('layouts.meta')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    
  @extends('layouts.navbar')
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('{{ URL::asset('images/ub.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Нүүр</a></span> <span>Дэлгэрэнгүй</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Төслийн дэлгэрэнгүй</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">{{$project->title}}</h2>
            <h4 class="mb-3">#1. Хураангуй</h4>
            <p>{{ $project->summary}}</p>
            <p>
              <img src="{{ URL::asset($project->img)}}" alt="" class="img-fluid">
            </p>
            <p>Үндсэн зураг гэх мэт хураангуй үргэлжлэл</p>

            <h4 class="mb-3 mt-5">#2. Асуудал сорилтууд</h4>
            <p>{{ $project->challenge_text}}</p>
            <h4 class="mb-3 mt-5">#3. Цаашдын зорилтууд</h4>
            <p>{{ $project->long_temp}}</p>
            <h4 class="mb-3 mt-5">#4. Асуудал сорилтууд</h4>
            <p>{{ $project->challenge_text}}</p>
            <h4 class="mb-3 mt-5">#5. Төслийн эзэмшигч</h4>
            <p>{{ $project->project_owner}}</p>
            <h4 class="mb-3 mt-5">#6. Сангийн мэдээлэл </h4>
            <p>{{ $project->info}}</p>
            <h4 class="mb-3 mt-5">#5. Нэмэлт бичиг баримт /Additional doc/</h4>
            <a href="{{ $project->url}}" target="_blank" ><p>{{ $project->doc_url}}</p></a>
            <h4 class="mb-3 mt-5">#6. Эх сурвалж / Бусад холбоос</h4>
            <a href="{{ $project->url}}" target="_blank" ><p>{{ $project->url}}</p></a>
            <a href="{{ $project->url1}}" target="_blank" ><p>{{ $project->url1}}</p></a>
            <a href="{{ $project->url2}}" target="_blank" ><p>{{ $project->ulr3}}</p></a>
            <a href="{{ $project->url3}}" target="_blank" ><p>{{ $project->url3}}</p></a>
            <a href="{{ $project->url4}}" target="_blank" ><p>{{ $project->url4}}</p></a>

            <!--

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            

            <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="{{ URL::asset('images/ub1.jpg') }}" alt="Image placeholder" class="img-fluid mb-6">
              </div>
              <div class="desc align-self-md-center">
                <h3>Эзэмшигч</h3>
                <p>Эзэмшигчийн мэдээлэл хураангуй намтар Эзэмшигчийн мэдээлэл хураангуй намтар Эзэмшигчийн мэдээлэл хураангуй намтар Эзэмшигчийн мэдээлэл хураангуй намтар</p>
              </div>
            </div>
            
            -->
            

          </div> <!-- .col-md-8 -->

          <div class="col-md-4 sidebar ftco-animate">
            <div class="item">
              <div class="cause-entry">
                <a href="{{'single/'.$project->id}}" class="img" style="background-image: url(../images/ub1.jpg);"></a>
                <div class="text p-3 p-md-4">
                    <div style="font-size:2vw;"><a href="{{'single/'.$project->id}}">{{ $project->title }}</a></div>
                    <p>{{ str_limit($project->shortsummary,'50') }}</p>
                    <span class="donation-time mb-3 d-block"></span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $project->am }}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">{{ $project->amount }} аас {{ $project->raised }}</span>

                    <div class="" style="width: 100%;">
                      <a class="btn btn-primary" href="{{'check_out/'.$project->id}}" target="_blank" >Хандив өгөх</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 sidebar ftco-animate">
            <!-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Detail</h3>
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                  <h3 class="heading"><a href="#">Эхэлсэн : {{str_limit($project->start_at, 10, '')}}</a></h3>
                  <h3 class="heading"><a href="#">Дуусах хугацаа : {{str_limit($project->end_at, 10, '')}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span></a></div>
                    <div><a href="#"><span class="icon-person"></span></a></div>
                    <div><a href="#"><span class="icon-chat"></span></a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ URL::asset('images/ub1.jpg') }}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span></a></div>
                    <div><a href="#"><span class="icon-person"></span></a></div>
                    <div><a href="#"><span class="icon-chat"></span></a></div>
                  </div>
                </div>
              </div>
              <div class="text" style="width: 100%;">
                <div class="progress" style="height: 20px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: {{$am}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$am}}%</div>
                </div>
                <div>@if ($project->amount != '') {{ $project->amount.' ₮ өөс '. $project->raised.' ₮ ' }}
                @endif</div>
              </div>
              <div class="text-right" style="margin-top: 10px;">
                <a class="btn btn-primary btn-lg" style="width: 100%;" href="{{'check_out/'.$project->id}}" target="_blank" >Хандив өгөх</a>
              </div>
            </div>

          -->

        </div>
      </div>
    </section> <!-- .section -->

    @extends('layouts.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ URL::asset('js/aos.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ URL::asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ URL::asset('js/google-map.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
    
  </body>
</html>