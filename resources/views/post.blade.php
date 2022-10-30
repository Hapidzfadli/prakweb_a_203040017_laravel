
@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{$post->title}}</h1>
            <p>By. <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
            <img class="card-img-top" src="https://source.unsplash.com/1200x500?{{$post->category->name}}" alt="{{$post->category->name}}">
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="d-block mt-3">Back to posts</a>
        </div>
    </div>
</div>
@endsection
