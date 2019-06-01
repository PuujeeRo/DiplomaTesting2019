@extends('projects-mgmt.base')

@section('action-content')
<section class="content">

      <!-- Your Page Content Here -->
      <div class="container" style="margin-left: 25%">
        <div class="row"> 
            <div class="col-md-6">
                <form role="form" method="POST" action="{{ route('projects.update', ['id' => $project->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!--    <select class="form-control" id="productSelect" ><option>Please Select a Product Group</option>
                      <option>Bar Soaps</option>
                      <option>Lotions</option>
                      <option>Creams</option>
                    </select>   -->
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
                        <input required name="amount" id="amount_id" class="form-control" data-icon="false" type="number" placeholder="₮" value="{{ $project->amount }}">
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

    <script type="text/javascript">
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>
@endsection
