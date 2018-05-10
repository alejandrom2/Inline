@extends('layouts.app')

@section('content')
{{Form::open()}}
	{{Form::label('name','Name')}}
	{{Form::text('name')}}

	{{Form::label('requester','Requester')}}
	{{Form::text('requester')}}

	{{Form::label('date_requested','Date Requested')}}
	{{Form::date('date_requested', \Carbon\Carbon::now())}}

	{{Form::label('date_updated','Date Updated')}}
	{{Form::date('date_updated', \Carbon\Carbon::now())}}

	{{Form::label('description','Description')}}
	{{Form::textArea('description')}}    

	{{Form::label('status','Status')}}
	{{Form::text('status')}}

	{{Form::submit()}}
{{Form::close()}}
@endsection
