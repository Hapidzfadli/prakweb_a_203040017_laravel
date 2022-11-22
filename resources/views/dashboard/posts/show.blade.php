@extends('dashboard.layouts.main')
@section('container')
<div class="row mb-5">
  <div class="col-lg-8">
    <h1 class="mb-3">{{$post->title}}</h1>

    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
      @method('delete')
      @csrf
      <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
          <span data-feather="x-circle" class="align-text-bottom"></span>Delete
      </button>
    </form>

    <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">

    <article class="my-3 fs-5">
      {!! $post->body !!}
    </article>
    <a href="/dashboard/posts" class="d-block mt-3">Back to Posts</a>
  </div>
</div>
@endsection