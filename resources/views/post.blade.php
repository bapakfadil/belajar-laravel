@extends('layout.main')

{{-- Post Details Page --}}
@section('mainSection')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="post-title mb-5">
                    <h2 class="text-center"><strong>{{ $post['postTitle'] }}</strong></h2>
                    <h6 class="text-center px-5">{{ $post['excerpt'] }}</h6>
                </div>
                <div class="row post-author mb-3">
                    <div class="col">
                        <p class="mb-2 fs-6">By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-dark"><strong>{{ $post->author->name }}</strong></a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-dark"><strong>{{ $post->category->name }}</strong></a></p>
                    </div>
                    <div class="col">
                        <p class=" fs-6 text-end">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <img src="https://source.unsplash.com/800x200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-2">
                {{-- <img src="/img/static-post-image.jpeg" alt="{{ $post->category->name }}" class="img-fluid mb-2"> --}}
                <div class="mt-2 mb-4 ">
                    {!! $post->postBody !!}
                </div>
                <div class="post-footer pb-5">
                    <a href="/posts" class="text-decoration-none btn btn-sm btn-secondary bg-dark">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>

@endsection
