
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

@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Create New Deliverable</h4>
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
		          {{Form::label('status','Status')}}
		          <div class="form-group">
		          	{{Form::text('status','',['class'=>'form-control'])}}
		          </div>
		        </div>
		        <div class="col-sm-3">
		          {{Form::label('start_date','Start Date')}}
		          <div class="form-group">
		          	{{Form::date('start_date', \Carbon\Carbon::now() ,['class'=>"form-control datepicker"])}}
		          </div>
		        </div>
		        <div class="col-sm-3">
		          {{Form::label('end_date','End Date')}}
		          <div class="form-group">
		          	{{Form::date('end_date', \Carbon\Carbon::now() ,['class'=>"form-control datepicker"])}}
		          </div>
		        </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
				{{Form::label('description','Description')}}
				<div class="form-group">
					{{Form::textArea('description','',['class'=>'form-control'])}}    
				</div>
            </div>
          </div>
      	{{Form::submit()}}
		{{Form::close()}}
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Deliverables</h4>
        <a href="{{url('deliverable/create')}}" class="btn btn-info btn-square btn-icon pull-right">
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
              <th>Status</th>
              <th>Start Date</th>
              <th>Due Date</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Status</th>
              <th>Start Date</th>
              <th>Due Date</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($deliverables as $deliverable)
                <tr>
                  <td>{{$deliverable->id}}</td>
                  <td>{{$deliverable->name}}</td>
                  <td>{{$deliverable->status}}</td>
                  <td>{{$deliverable->start_date}}</td>
                  <td>{{$deliverable->due_date?:"N/A"}}</td>
                </tr>
                <tr>
				    <td colspan="5">
				        <table class="table table-striped table-bordered dataTable" cellpadding="5" cellspacing="0" border="0">
				            <tbody>
				                <tr>
				                    <td>Description:</td>
				                </tr>
				                <tr>
				                    <td>{{$deliverable->description}}</td>
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

