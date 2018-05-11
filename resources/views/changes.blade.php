@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Changes</h4>
        <a href="{{url('change/create')}}" class="btn btn-info btn-square btn-icon pull-right">
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
              <th>Requester</th>
              <th>Date Requested</th>
              <th>Date Updated</th>
              <th>Status</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Requester</th>
              <th>Date Requested</th>
              <th>Date Updated</th>
              <th>Status</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($changes as $change)
                <tr>
                  <td>{{$change->id}}</td>
                  <td>{{$change->name}}</td>
                  <td>{{$change->requester}}</td>
                  <td>{{$change->date_requested}}</td>
                  <td>{{$change->date_updated}}</td>
                  <td>{{$change->status}}</td>
                </tr>
                <tr>
				    <td colspan="6">
				        <table cellpadding="6" cellspacing="0" border="0">
				            <tbody>
				                <tr>
				                    <td>Description:</td>
				                </tr>
				                <tr>
				                    <td>{{$change->description}}</td>
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