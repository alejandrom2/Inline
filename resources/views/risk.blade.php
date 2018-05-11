@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Risks</h4>
        <a href="{{url('risk/create')}}" class="btn btn-info btn-square btn-icon pull-right">
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
              <th>Risk Score</th>
              <th>Action By</th>
              <th>Category</th>
              <th>Impact</th>
              <th>Probability</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Risk Score</th>
              <th>Action By</th>
              <th>Category</th>
              <th>Impact</th>
              <th>Probability</th>
            </tr>
          </tfoot>
          <tbody>
			@foreach($risks as $risk)
                <tr>
                  <td>{{$risk->id}}</td>
                  <td>{{$risk->name}}</td>
                  <td>{{$risk->risk_score}}</td>
                  <td>{{$risk->action_by}}</td>
                  <td>{{$risk->category}}</td>
                  <td>{{$risk->impact}}</td>
                  <td>{{$risk->probability}}</td>
                </tr>
                <tr>
            <td colspan="7">
                <table class="table table-striped table-bordered dataTable" cellpadding="7" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>Mitigation:</td>
                            <td>Contingency<td>
                        </tr>
                        <tr>
                            <td>{{$risk->mitigation}}</td>
                            <td>{{$risk->contingency}}</td>
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