@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Reference Documents</h4>
        <a href="{{url('reference-document/create')}}" class="btn btn-info btn-square btn-icon pull-right">
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
              <th>Date Updated</th>
              <th>Requirements Text</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Date Requested</th>
              <th>Date Updated</th>
              <th>Requirements Text</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($references as $reference)
                <tr>
                  <td>{{$reference->id}}</td>
                  <td>{{$reference->name}}</td>
                  <td>{{$reference->date_requested}}</td>
                  <td>{{$reference->date_updated}}</td>
                  <td>{{$reference->requirement_text}}</td>
                </tr>
                <tr>
				    <td colspan="5">
				        <table class="table table-striped table-bordered dataTable" cellpadding="5" cellspacing="0" border="0">
				            <tbody>
				                <tr>
				                    <td>Page in Source Document:</td>
				                    <td>Paragraph in Source Document:</td>

				                    <td>Page in Client Reference:</td>
				                    <td>Paragraph in Client Reference:</td>

				                    <td>Deliverable Name:</td>
				                    <td>Deliverable Id:</td>
				                </tr>
				                <tr>
				                    <td>{{$reference->source_pg}}</td>
				                    <td>{{$reference->source_par}}</td>

				                    <td>{{$reference->client_pg}}</td>
				                    <td>{{$reference->client_par}}</td>

				                    <td>{{$reference->deliv_name}}</td>
				                    <td>{{$reference->deliv_id}}</td>
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