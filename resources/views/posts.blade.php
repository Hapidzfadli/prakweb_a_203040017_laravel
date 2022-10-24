
@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
    <article class="mb-5">
        <h1>
           <a href="/posts/{{$post->slug}}"> {{$post->title}}</a>
        </h1>
        <p>{{$post->excerpt}}</p>
    </article>
@endforeach
<h2></h2>
<h5></h5>
<p></p>
@endsection
