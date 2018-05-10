@extends('layouts.app')

@section('content')
	{{Form::open()}}
		{{Form::label('name',"Name")}}
		{{Form::text('name')}}

		{{Form::label('requirement_text','Requirement Text')}}
		{{Form::text('requirement_text')}}

		{{Form::label('source_pg','Source Page')}}
		{{Form::text('source_pg')}}

		{{Form::label('source_par','Source Paragraph')}}
		{{Form::text('source_par')}}

		{{Form::label('client_pg','Client Page')}}
		{{Form::text('client_pg')}}

		{{Form::label('client_par','Client Paragraph')}}
		{{Form::text('client_par')}}

		{{Form::label('deliv_name','Deliverable Name')}}
		{{Form::text('deliv_name')}}

		{{Form::label('deliv_id','Deliverable Id')}}
		{{Form::text('deliv_id')}}


		{{Form::label('date_updated','Date Updated')}}
		{{Form::date('date_updated', \Carbon\Carbon::now())}}

		{{Form::label('date_requested','Date Requested')}}
		{{Form::date('date_requested', \Carbon\Carbon::now())}}                 


		{{Form::submit()}}
	{{Form::close()}}
@endsection