@extends('base.pin')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">All Post</h3>
          <h3 class="box-title">All Post</h3>
          
        </div>
          <div class="col-sm-4">
           {{--  <a class="btn btn-primary" href="{{ route('department.create') }}">Add new department</a>    --}}
        </div> 
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="">
         {{ csrf_field() }}
         @component('newadmin.search', ['title' => 'Search'])
          @component('newadmin.two-cols', ['items' => ['Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['pin'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending">S/N</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Title</th>
                {{--  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">File</th>  --}}
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Body</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Date Created</th>
              
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr role="row" class="odd">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->title}}</td>
                    {{--  <td>{{$post->file}}</td>  --}}
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->toDateTimeString()}}</td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
                
              <tr>
                <th width="20%" rowspan="1" colspan="1">Check Pin</th>
                <th rowspan="1" colspan="2">Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($posts)}} of {{count($posts)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{$posts->links()}}

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
@endsection