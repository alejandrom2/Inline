@extends('layouts.app')

@section('content')
<ul>
	@foreach($tasks as $task)
	<pre>{{json_encode($task)}}</pre>
	@endforeach
</ul>

@endsection