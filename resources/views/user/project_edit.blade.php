<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-green.min.css")}}" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-green sidebar-mini fixed">
<div class="wrapper">

  <!-- Main Header -->
  @include('user.header')
  <!-- Sidebar -->
  @include('user.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Миний төсөл
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="container" style="margin-left: 25%">
		<div class="row"> 
	  		<div class="col-md-6">
			  	<form role="form" method="POST" action="{{ route('projects.update', ['id' => $project->id]) }}" enctype="multipart/form-data">
			  		{{ csrf_field() }}
				    <!--	<select class="form-control" id="productSelect" ><option>Please Select a Product Group</option>
				      <option>Bar Soaps</option>
				      <option>Lotions</option>
				      <option>Creams</option>
				    </select>	-->
				    <div class="" style="opacity: 0; height: 0px;">
						<label for="projecttitle" class="loginFormElement">id</label>
						<input name="user_id" class="block" id="user_id" type="text" value="{{ Auth::user()->id }}">
					</div>
					<div class="form-group">
						<label for="projecttitle" class="loginFormElement">Төслийн нэр:</label>
						<input name="title" class="form-control" id="title_id" type="text" placeholder="Төслийн нэр" value="{{ $project->title }}">
					</div>
					<div class="form-group">
						<label class="loginformelement" for="productdescription">Төслийн тайлбар</label>
						<textarea name="summary" rows="5" id="summary_id" class="form-control input-lg" placeholder="Төслийн тайлбар">{{ $project->summary }}</textarea>
					</div>
					<div class="form-group">
						<label class="loginformelement" for="projectproblem">Тулгарч буй асуудал түүний шийдэл алсын цаашдын төлөвлөгөө</label>
						<textarea name="challenge" rows="5" id="challenge_id" class="form-control input-lg" placeholder="Тулгарч буй асуудал түүний шийдэл алсын цаашдын төлөвлөгөө">{{ $project->challenge_text }}</textarea><div class="container" ></div>
					</div>
					<div class="form-group">
						<label class="loginformelement" for="projecturl">Веб холбоос URL</label>
						<input name="url" id="url_id" class="form-control input-lg" placeholder="Төсөлтэй холбоотой веб сайтын холбоос URL" value="{{ $project->url }}">
					</div>
					<div class="form-group">
						<label class="loginformelement" for="projecturl">Видео холбоос URL</label>
						<input name="videourl" id="videourl_id" class="form-control input-lg" placeholder="Холбоотой видео холбоос URL" value="{{ $project->video_url }}">
					</div>
					<div class="form-group">
						<label class="control-label">Төслийн үндсэн зураг</label>
						<input name="projectimage" id="projectimage_id" class="form-control" data-icon="false" type="file" value="{{ $project->img }}">
					</div>
					<div class="form-group">
						<label class="control-label">Шаардлагатай мөнгөн дүн</label>
						<input name="amount" id="amount_id" class="form-control" data-icon="false" type="number" placeholder="₮">
					</div>
					<div class="form-group">
						<label class="control-label">Эхлэх огноо</label>
						<input name="start" id="start_id" class="form-control" data-icon="false" type="date" 
						value="{{ str_limit($project->start_at, $limit = 10, $end = '')}}"
					<div class="form-group">
						<label class="control-label">Дуусах огноо</label>
						<input name="end" id="end_id" class="form-control" data-icon="false" type="date" value="{{ str_limit($project->end_at, $limit = 10, $end = '')}}">
					</div>
					<div class="form-group">
						<label class="control-label">Төсөл эзэмшигч хэн болох ?</label>
						<textarea name="projectowner" rows="3" id="projectowner_id" class="form-control input-lg" placeholder="Төслийн эзэмшигч хэн болох товч тайлбар">{{ $project->project_owner }}</textarea>
					</div>
					<div class="form-group">
						<label class="loginformelement" for="projectproblem">Сангийн мэдээлэл</label>
						<textarea name="info" rows="3" id="info_id" class="form-control input-lg" placeholder="Банк : дансны дугаар : эзэмшигч">{{ $project->info }}</textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Төсөлтэй холбоотой нэмэлт бичиг баримт PDF файл</label>
						<input name="projectdoc" id="projectdoc_id" class="form-control" data-icon="false" type="text" placeholder="Болоогүй байгаа" value="{{ $project->doc_url }}">
					</div>
					<div class="form-group">
						<label class="control-label">Нэмэлт холбоосууд (Facebook, Twitter, Gmail г.м)</label>
						<input name="url1" id="url1_id" class="form-control" data-icon="false" type="text" placeholder="URL 1" value="{{ $project->url1 }}">
					</div>
					<div class="form-group">
						<input name="url2" id="url2_id" class="form-control" data-icon="false" type="text" placeholder="URL 2" value="{{ $project->url2 }}">
					</div>
					<div class="form-group">
						<input name="url3" id="url3_id" class="form-control" data-icon="false" type="text" placeholder="URL 3" value="{{ $project->url3 }}">
					</div>
					<div class="form-group">
						<input name="url4" id="url4_id" class="form-control" data-icon="false" type="text" placeholder="URL 4"
						value="{{ $project->url4 }}">
					</div>
					<button type="submit" id="addproject_id" class="btn btn-success form-control">Хадгалах</button>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script type="text/javascript">
		var msg = '{{Session::get('alert')}}';
	    var exist = '{{Session::has('alert')}}';
	    if(exist){
	      alert(msg);
	    }
	</script>

 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
