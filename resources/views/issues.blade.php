@extends('layouts.app')

@section('content')
<ul>
	@foreach($issues as $issue)
	<pre>{{json_encode($issue)}}</pre>
	@endforeach
</ul>

@endsection