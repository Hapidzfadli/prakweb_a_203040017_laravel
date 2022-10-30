
@extends('layouts.main')
@section('container')

<h1 class="mb-5">{{$title}}</h1>

@if ($posts->count())

<div class="card mb-3">
    <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" alt="{{$posts[0]->category->name}}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
      <p>
        <small class="text-muted">
            By. <a class="text-decoration-none" href="/authors/{{$posts[0]->author->username}}">{{$posts[0]->author->name}}</a>
            {{$posts[0]->created_at->diffForHumans()}}
        </small>
      </p>
      <p class="card-text">{{$posts[0]->excerpt}}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{$posts[0]->slug}}">Read More..</a>
    </div>
  </div>

  <div class="contaner">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <a class="text-decoration-none text-white position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7);" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                    <img class="card-img-top" src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="{{$post->category->name}}">
                    <div class="card-body">
                        
                      <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{$post->slug}}">{{$post->title}}</a></h5>
                      <p><small class="text-muted">
                        By. <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>
                        {{$posts[0]->created_at->diffForHumans()}}
                      </small></p>
                      <p class="card-text">{{$post->excerpt}}</p>
                      <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
  </div>

    
@endif



@endsection
