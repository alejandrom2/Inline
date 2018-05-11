@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Create New Risk</h4>
      </div>
      <div class="card-body ">
        {{Form::open(['class'=>'form-horizontal'])}}
          <div class="row">
            <div class="col-sm-3">
              {{Form::label('name','Name')}}
              <div class="form-group">
                {{Form::text('name','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('risk_score','Risk Score')}}
              <div class="form-group">
                {{Form::number('risk_score','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('action_by','Action By')}}
              <div class="form-group">
                {{Form::text('action_by','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('category','Category')}}
              <div class="form-group">
                {{Form::text('category','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('impact','Impact')}}
              <div class="form-group">
                {{Form::text('impact','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('probability','Probability')}}
              <div class="form-group">
                {{Form::number('probability','',['class'=>'form-control'])}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{Form::label('mitigation','Mitigation')}}
              <div class="form-group">
                {{Form::textArea('mitigation','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-6">
              {{Form::label('contingency','Contingency')}}
              <div class="form-group">
                {{Form::textArea('contingency','',['class'=>'form-control'])}}
              </div>
            </div>
            {{Form::submit()}}
          </div>
      {{Form::close()}}
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Risks</h4>
        <a href="{{url('risk/create')}}" class="btn btn-info btn-square btn-icon pull-right">
              <i class="fa fa-plus"></i>
      </a>
      </div>
      <div class="card-body">
        <div class="toolbar pull-right">
        </div>
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Risk Score</th>
              <th>Action By</th>
              <th>Category</th>
              <th>Impact</th>
              <th>Probability</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Risk Score</th>
              <th>Action By</th>
              <th>Category</th>
              <th>Impact</th>
              <th>Probability</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($risks as $risk)
                <tr>
                  <td>{{$risk->id}}</td>
                  <td>{{$risk->name}}</td>
                  <td>{{$risk->risk_score}}</td>
                  <td>{{$risk->action_by}}</td>
                  <td>{{$risk->category}}</td>
                  <td>{{$risk->impact}}</td>
                  <td>{{$risk->probability}}</td>
                </tr>
                <tr>
            <td colspan="7">
                <table class="table table-striped table-bordered dataTable" cellpadding="7" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>Mitigation:</td>
                            <td>Contingency<td>
                        </tr>
                        <tr>
                            <td>{{$risk->mitigation}}</td>
                            <td>{{$risk->contingency}}</td>
				                </tr>
				            </tbody>
				        </table>
				    </td>
				</tr>
			@endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('#datatable').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });
    var table = $('#datatable').DataTable();
  });
</script>
@endsection