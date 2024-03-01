@extends('layout.main')

@section('mainSection')
    <h1 class="mb-5">Post Categories</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
            </li>
        </ul>
    @endforeach

    <span>Back to <a href="/posts">Posts</a> or see all <a href="/categories">Categories</a></span>
@endsection
