<!DOCTYPE html>
<html>
<head>
	<title>add</title>
	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <!-- Bootstrap 3.3.6 -->
	  <link href="{{ asset('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	  <!-- Theme style -->
	   <link href="{{ asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
	  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
	        page. However, you can choose any other skin. Make sure you
	        apply the skin class to the body tag so the changes take effect.
	  -->
	  <link href="{{ asset('/bower_components/AdminLTE/dist/css/skins/skin-green.min.css')}}" rel="stylesheet" type="text/css" />

	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini fixed">
	<!-- Main Header -->
  	@include('user.header')
  	<!-- Sidebar -->
  	@include('user.sidebar')
  	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Миний төслүүд
	      </h1>
	      <ol class="breadcrumb">
	        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
	        <li class="active">Миний төслүүд</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">

	      <!-- Your Page Content Here -->
	      <!-- Main content -->
				    <section class="content">
				      <div class="box">
				  <div class="box-header">
				    <div class="row">
				        <div class="col-sm-8">
				          <h3 class="box-title">Миний төслүүдийн жагсаалт</h3>
				        </div>
				        <div class="col-sm-4">
				          <a class="btn btn-primary" href="/addproject">Төсөл нэмэх</a>
				        </div>
				    </div>
				  </div>
				  <!-- /.box-header -->
				  <div class="box-body">
				      <div class="row">
				        <div class="col-sm-6"></div>
				        <div class="col-sm-6"></div>
				      </div>
				    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				      <div class="row">
				        <div class="col-sm-12">
				          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
				            <thead>
				              <tr role="row">
				                <th width="20%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Гарчиг</th>
				                <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">summary</th>
				                <th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">id</th>
				                <th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">raised</th>
				                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
				              </tr>
				            </thead>
				            <tbody>
				            @foreach ($projects as $project)
				            @if(Auth::User()->id == $project->owner_id)
				                <tr role="row" class="odd">
				                  <td class="sorting_1">{{ $project->id }}</td>
				                  <td>{{str_limit($project->summary, 50)}}</td>
				                  <td class="hidden-xs">{{$project->owner_id}}</td>
				                  <td class="hidden-xs">{{ $project->updated_at }}</td>
				                  <td>
				                    <form class="row" method="POST" action="{{ route('user-management.destroy', ['id' => $project->id]) }}" onsubmit = "return confirm('Усгахдаа итгэлтэй байна уу?')">
				                        <input type="hidden" name="_method" value="DELETE">
				                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
				                        <a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="btn col-xs">
				                        Засах
				                        </a>
				                         <button type="submit" class="btn btn-danger col-xs">
				                          Усгах
				                        </button>
				                    </form>
				                  </td>
				              </tr>
				              @endif
				            @endforeach
				            </tbody>
				            <tfoot>
				              <tr>
				                <th width="20%" rowspan="1" colspan="1">User Name</th>
				                <th width="20%" rowspan="1" colspan="1">Email</th>
				                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">First Name</th>
				                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Last Name</th>
				                <th rowspan="1" colspan="2">Action</th>
				              </tr>
				            </tfoot>
				          </table>
				        </div>
				      </div>
				      <div class="row">
				        <div class="col-sm-5">
				          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
				        </div>
				        <div class="col-sm-7">
				          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
				  <!-- /.box-body -->
				</div>
				    </section>
				    <!-- /.content -->
				  </div>

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
	<script src="{{ asset ('/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset ('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!-- AdminLTE App -->
	<script src="{{ asset ('/bower_components/AdminLTE/dist/js/app.min.js') }}" type="text/javascript"></script>

	<!-- Optionally, you can add Slimscroll and FastClick plugins.
	     Both of these plugins are recommended to enhance the
	     user experience. Slimscroll is required when using the
	     fixed layout. -->	
</body>
</html>