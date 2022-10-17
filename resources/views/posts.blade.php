
@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
    <article class="mb-5">
        <h1>
           <a href="/posts/{{$post["slug"]}}"> {{$post["title"]}}</a>
        </h1>
        <h5>{{$post["author"]}}</h5>
        <p>{{$post["body"]}}</p>
    </article>
@endforeach
<h2></h2>
<h5></h5>
<p></p>
@endsection
