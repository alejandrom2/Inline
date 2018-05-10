@extends('layouts.app')

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