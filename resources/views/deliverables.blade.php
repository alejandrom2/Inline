@extends('layouts.app')

@section('content')
<ul>
	@foreach($deliverables as $deliverable)
	<pre>{{json_encode($deliverable)}}</pre>
	@endforeach
</ul>

@endsection