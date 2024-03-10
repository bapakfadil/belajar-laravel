@extends('layout.main')

@section('mainSection')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ( $categories as $category )
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x300?{{ $category->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <div class="position-absolute m-0 px-3 py-2" style="background-color: rgba(0,0,0, 0.7)">
                                <h5 class="card-title">{{ $category->name}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row category-footer pt-5 pb-5">
        <div class="col">
            <a href="/posts" class="text-decoration-none btn btn-sm btn-outline-dark">Back to Posts</a>
        </div>
        <div class="col text-end">
            <a href="/" class="text-decoration-none btn btn-sm btn-outline-dark">Return Home</a>
        </div>
    </div>
@endsection
