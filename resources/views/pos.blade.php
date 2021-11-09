
@extends('layouts.main')

@section('container')
<article>
<h2>{{ $pos["title"] }}</h2>
<h5>{{ $pos["author"] }}</h5>
<p>{{ $pos["body"] }}</p>
</article>


<a href="/blog">Back to post</a>
@endsection