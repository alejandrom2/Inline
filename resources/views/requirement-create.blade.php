@extends('layouts.app')

@section('content')
{{Form::open()}}
	{{Form::label('name','Name')}}
	{{Form::text('name')}}

	{{Form::label('date_requested','Date Requested')}}
	{{Form::date('date_requested', \Carbon\Carbon::now())}}

	{{Form::label('source_doc','Source Documents')}}
	{{Form::text('source_doc')}}

	{{Form::label('text','Requirement Text') }}
	{{Form::text('text') }}

	{{Form::label('source_doc_page','Source Documents Page')}}
	{{Form::text('source_doc_page')}}

	{{Form::label('source_doc_paragraph','Source Documents Paragraph')}}
	{{Form::text('source_doc_paragraph')}}

	{{Form::label('client_ref_page','Documents Reference Page')}}
	{{Form::text('client_ref_page')}}

	{{Form::label('client_ref_page','Client Reference Page')}}
	{{Form::text('client_ref_page')}}

	{{Form::label('client_ref_paragraph','Client Reference Paragraph')}}
	{{Form::text('client_ref_paragraph')}}

	{{Form::label('deliverable_name','Deliverable Name')}}
	{{Form::text('deliverable_name')}}

	{{Form::label('deliverable_id','Deliverable ID')}}
	{{Form::text('deliverable_id')}}

	{{Form::label('status','Status')}}
	{{Form::text('status')}}


	{{Form::submit()}}
{{Form::close()}}
@endsection
