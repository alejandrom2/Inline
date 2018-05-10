@extends('layouts.app')

@section('content')
<ul>
	@foreach($changes as $change)
	<pre>{{json_encode($change)}}</pre>
	@endforeach
</ul>

@endsection