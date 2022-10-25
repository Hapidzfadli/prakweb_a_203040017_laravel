
@extends('layouts.main')
@section('container')

<h1 class="mb-5">Post Categories</h1>
@foreach ($categories as $category)
    <article class="mb-5">
        <ul>
            <li>
                <h1><a href="/categories/{{$category->slug}}">{{$category->name}}</a></h1>
            </li>
        </ul>
    </article>
@endforeach
<h2></h2>
<h5></h5>
<p></p>
@endsection
