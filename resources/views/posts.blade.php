
@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
    <article class="mb-5 border-bottom">
        <h1>
           <a class="text-decoration-none" href="/posts/{{$post->slug}}">{{$post->title}}</a>
        </h1>
        <p>By. <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p>{{$post->excerpt}}</p>

        <a class="text-decoration-none pb-4" href="/posts/{{$post->slug}}">Read More..</a>
    </article>
@endforeach
<h2></h2>
<h5></h5>
<p></p>
@endsection
