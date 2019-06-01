@extends('projects-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">Төслүүдийн жагсаалт</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('user-management.create') }}">Төсөл нэмэх</a>
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
                <th width="20%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">col0</th>
                <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">col1</th>
                <th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">col2</th>
                <th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">col3</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($projects as $project)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $project->title }}</td>
                  <td>{{str_limit($project->summary, 10) }}</td>
                  <td class="hidden-xs">{{ $project->amount }}</td>
                  <td class="hidden-xs">{{ $project->updated_at }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('projects-management.destroy', ['id' => $project->id]) }}" onsubmit = "return confirm('Устгахдаа итгэлтэй байна уу ?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('projects-management.edit', ['id' => $project->id]) }}" class="btn btn-sm">
                        Засах
                        </a>
                         <button type="submit" class="btn btn-danger btn-sm">
                          Устгах
                        </button>
                    </form>
                    <form class="row" method="POST" action="is_active/{{ $project->id }}">
                      {{ csrf_field() }}
                        @if($project->is_active == 1) 

                         <button type="submit" class="btn btn-warning btn-sm" id="id_btn1" onclick="deactive_it()">
                          Идэвхитэй
                        </button>
                        @elseif($project->is_active == 0) 
                         <button type="submit" class="btn btn-danger btn-sm" id="id_btn2" onclick="active_it()">
                          Идэвхигүй
                        </button>
                        @endif
                    </form>
                  </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="20%" rowspan="1" colspan="1">col1</th>
                <th width="20%" rowspan="1" colspan="1">col2</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">col3</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">col4</th>
                <th rowspan="1" colspan="2">Үйлдэл</th>
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
  <script type="text/javascript">
    function deactive_it() {
      return confirm('Идэвхигүй болгох уу ?')
    }

    function active_it() {
      return confirm('Идэвхитэй болгох уу?')
    }
  </script>
@endsection