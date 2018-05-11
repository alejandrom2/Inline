@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Create New Requirement</h4>
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
              {{Form::label('date_requested','Date Request')}}
              <div class="form-group">
                {{Form::date('date_requested', \Carbon\Carbon::now() ,['class'=>"form-control datepicker"])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('text','Text')}}
              <div class="form-group">
                {{Form::text('text','',['class'=>'form-control'])}}
              </div>
            </div>
          </div>
          <div class="row">
          	<div class="col-sm-3">
              {{Form::label('source_doc','source_doc')}}
              <div class="form-group">
                {{Form::text('source_doc','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('source_doc_page','source_doc_page')}}
              <div class="form-group">
                {{Form::text('source_doc_page','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('source_doc_paragraph','source_doc_paragraph')}}
              <div class="form-group">
                {{Form::text('source_doc_paragraph', '' ,['class'=>"form-control datepicker"])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('client_ref_page','client_ref_page')}}
              <div class="form-group">
                {{Form::text('client_ref_page', '' ,['class'=>"form-control datepicker"])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('client_ref_paragraph','client_ref_paragraph')}}
              <div class="form-group">
                {{Form::text('client_ref_paragraph','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('deliverable_name','deliverable_name')}}
              <div class="form-group">
                {{Form::text('deliverable_name','',['class'=>'form-control'])}}
              </div>
            </div>
            <div class="col-sm-3">
              {{Form::label('deliverable_id','deliverable_id')}}
              <div class="form-group">
                {{Form::text('deliverable_id','',['class'=>'form-control'])}}
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
        <h4 class="card-title">Requirements</h4>
        <a href="{{url('requirement/create')}}" class="btn btn-info btn-square btn-icon pull-right">
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
              <th>Date Requested</th>
              <th>Text</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Date Requested</th>
              <th>Text</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($requirements as $requirement)
                <tr>
                  <td>{{$requirement->id}}</td>
                  <td>{{$requirement->name}}</td>
                  <td>{{$requirement->date_requested}}</td>
                  <td>{{$requirement->text}}</td>
                </tr>
                <tr>
				    <td colspan="4">
				        <table class="table table-striped table-bordered dataTable" cellpadding="4" cellspacing="0" border="0">
				            <tbody>
				                <tr>
				                	<td>Source Document</td>
				                    <td>Page in Source Document:</td>
				                    <td>Paragraph in Source Document:</td>

				                    <td>Page in Client Reference:</td>
				                    <td>Paragraph in Client Reference:</td>

				                    <td>Deliverable Name:</td>
				                    <td>Deliverable Id:</td>
				                </tr>
				                <tr>
				                	<td>{{$requirement->source_doc}}</td>
				                    <td>{{$requirement->source_doc_page}}</td>
				                    <td>{{$requirement->source_doc_paragraph}}</td>
				                    <td>{{$requirement->client_ref_page}}</td>
				                    <td>{{$requirement->client_ref_paragraph}}</td>
				                    <td>{{$requirement->deliverable_name}}</td>
				                    <td>{{$requirement->deliverable_id}}</td>
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
