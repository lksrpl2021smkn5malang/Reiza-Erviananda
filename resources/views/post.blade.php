@extends('layouts.main')

@section('container')


	 @foreach ($post as $pos)
	 <article class="mb-5">
	 <h2>{{ $pos["title"] }}</h2>
	 <h5>{{ $pos["author"] }}</h5>
	 <p>{{ $pos["body"] }}</p>
	 @endforeach


@endsection