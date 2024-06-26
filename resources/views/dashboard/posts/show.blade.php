@extends('dashboard.layouts.main')

@section('mainContainer')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-title my-4">
                    <h2 class="text-center"><strong>{{ $post['postTitle'] }}</strong></h2>
                    <h6 class="text-center px-5">{{ $post['excerpt'] }}</h6>
                </div>
                <a href="/dashboard/posts" class="text-decoration-none btn btn-sm btn-secondary bg-dark"><span data-feather="arrow-left"></span> Back to My Posts</a>
                <a href="/dashboard/posts" class="text-decoration-none btn btn-sm btn-outline-warning"><span data-feather="edit"></span> Edit</a>
                <a href="/dashboard/posts" class="text-decoration-none btn btn-sm btn-outline-danger"><span data-feather="trash-2"></span> Delete</a>

                <img class="img-fluid my-2" src="https://source.unsplash.com/800x200?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                {{-- <img src="/img/static-post-image.jpeg" alt="{{ $post->category->name }}" class="img-fluid mb-2"> --}}
                <div class="mt-2 mb-4 ">
                    {!! $post->postBody !!}
                </div>
            </div>
        </div>
    </div>
@endsection
