@extends('layouts.app')

@section('content')
{{Form::open()}}
	{{Form::label('name','Name')}}
	{{Form::text('name')}}

	{{Form::label('resource_assigned','Resource Assigned')}}
	{{Form::text('resource_assigned')}}

	{{Form::label('start_date','Start Date')}}
	{{Form::date('start_date', \Carbon\Carbon::now())}}

	{{Form::label('end_date','End Date')}}
	{{Form::date('end_date', \Carbon\Carbon::now())}}

	{{Form::label('description','Description')}}
	{{Form::textArea('description')}}    

	{{Form::label('status_description','Status Description')}}
	{{Form::textArea('status_description')}}    

	{{Form::label('status','Status')}}
	{{Form::text('status')}}

	{{Form::submit()}}
{{Form::close()}}
@endsection
