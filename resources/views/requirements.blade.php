@extends('layouts.app')

@section('content')
<ul>
	@foreach($requirements as $requirement)
	<pre>{{json_encode($requirement)}}</pre>
	@endforeach
</ul>

@endsection