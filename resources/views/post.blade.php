
@extends('layouts.main')
@section('container')
<article>
    <h2>{{$post->title}}</h2>

    <p>By. Hapid Fadli in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>{!! $post->body !!}</p>
    <a href="/blog">Back to posts</a>
</article>
@endsection
