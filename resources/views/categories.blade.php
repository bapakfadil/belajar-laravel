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

    <div class="row category-footer pt-3 pb-5">
        <div class="col">
            <a href="/posts" class="text-decoration-none btn btn-sm btn-outline-dark">Back to Posts</a>
        </div>
        <div class="col text-end">
            <a href="/" class="text-decoration-none btn btn-sm btn-outline-dark">Return Home</a>
        </div>
    </div>
@endsection
