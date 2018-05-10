@extends('layouts.app')

@section('content')
<ul>
	@foreach($references as $reference)
	<pre>{{json_encode($reference)}}</pre>
	@endforeach
</ul>

@endsection