@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Create New Issue</h4>
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
		          {{Form::label('assigned','Assigned Date')}}
		          <div class="form-group">
		          	{{Form::date('assigned', \Carbon\Carbon::now() ,['class'=>"form-control datepicker"])}}
		          </div>
		        </div>
		        <div class="col-sm-3">
		          {{Form::label('expected','Expected Date')}}
		          <div class="form-group">
		          	{{Form::date('expected', \Carbon\Carbon::now() ,['class'=>"form-control datepicker"])}}
		          </div>
		        </div>
		        <div class="col-sm-3">
		          {{Form::label('completed','Completed Date')}}
		          <div class="form-group">
		          	{{Form::date('completed', \Carbon\Carbon::now() ,['class'=>"form-control datepicker"])}}
		          </div>
		        </div>
		        <div class="col-sm-3">
					{{Form::label('priority','Priority')}}
					<div class="form-group">
						{{Form::text('priority','',['class'=>'form-control'])}}
					</div>
            	</div>
            	<div class="col-sm-3">
					{{Form::label('severity','Severity')}}
					<div class="form-group">
						{{Form::text('severity','',['class'=>'form-control'])}}
					</div>
            	</div>
            	<div class="col-sm-3">
					{{Form::label('status','Status')}}
					<div class="form-group">
						{{Form::text('status','',['class'=>'form-control'])}}
					</div>
            	</div>
          </div>
          <div class="row">
            <div class="col-sm-6">
				{{Form::label('description','Description')}}
				<div class="form-group">
					{{Form::textArea('description','',['class'=>'form-control'])}}    
				</div>
            </div>
            <div class="col-sm-6">
				{{Form::label('status_description','Status Description')}}
				<div class="form-group">
					{{Form::textArea('status_description','',['class'=>'form-control'])}}    
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
        <h4 class="card-title">Issues</h4>
        <a href="{{url('issue/create')}}" class="btn btn-info btn-square btn-icon pull-right">
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
			  <th>Assigned</th>
			  <th>Expected</th>
			  <th>Completed</th>
			  <th>Priority</th>
			  <th>Severity</th>
			  <th>Status</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
			  <th>Name</th>
			  <th>Assigned</th>
			  <th>Expected</th>
			  <th>Completed</th>
			  <th>Priority</th>
			  <th>Severity</th>
			  <th>Status</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($issues as $issue)
                <tr>
                  <td>{{$issue->id}}</td>
                  <td>{{$issue->name}}</td>
                  <td>{{$issue->expected}}</td>
                  <td>{{$issue->completed}}</td>
                  <td>{{$issue->priority}}</td>
                  <td>{{$issue->severity}}</td>
                  <td>{{$issue->status}}</td>
                </tr>
                <tr>
				    <td colspan="7">
				        <table class="table table-striped table-bordered dataTable" cellpadding="7" cellspacing="0" border="0">
				            <tbody>
				                <tr>
				                    <td>Description:</td>
				                    <td>Status Description<td>
				                </tr>
				                <tr>
				                    <td>{{$issue->description}}</td>
				                    <td>{{$issue->status_description}}</td>
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


@section('content')
	{{Form::open()}}
		{{Form::label('name',"Name")}}
		{{Form::text('name')}}

		{{Form::label('assigned','Date Assigned')}}
		{{Form::date('assigned', \Carbon\Carbon::now())}}

		{{Form::label('expected','Date Expected')}}
		{{Form::date('expected', \Carbon\Carbon::now())}}

		{{Form::label('completed','Date Completed')}}
		{{Form::date('assigned', \Carbon\Carbon::now())}}

		{{Form::label('priority',"Priority")}}
		{{Form::text('priority')}}

		{{Form::label('severity',"Severity")}}
		{{Form::text('severity')}}

		{{Form::label('description',"Description")}}
		{{Form::textArea('description')}}

		{{Form::label('status',"Status")}}
		{{Form::text('status')}}

		{{Form::label('status_description',"Status Description")}}
		{{Form::textArea('status_description')}}

		{{Form::submit()}}
	{{Form::close()}}
@endsection