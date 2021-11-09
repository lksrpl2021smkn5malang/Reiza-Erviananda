@extends('layouts.main')

@section('container')


	 @foreach ($post as $pos)
	 <article class="mb-5">
	 <h2>
	 	<a href="/post/{{ $pos["slug"] }}">{{ $pos["title"] }}</a>
	 </h2>
	 <h5>{{ $pos["author"] }}</h5>
	 <p>{{ $pos["body"] }}</p>
	</article>
	 @endforeach


@endsection