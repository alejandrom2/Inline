@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Create New Task</h4>
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
		          {{Form::label('resource_assigned','Resource Assigned')}}
		          <div class="form-group">
		          	{{Form::text('resource_assigned','',['class'=>'form-control'])}}
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
@endsection
