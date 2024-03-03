@extends('layout.main')

{{-- Post Details Page --}}
@section('mainSection')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-4">
                    <h2 class="mb-3"><strong>{{ $post['postTitle'] }}</strong></h2>
                    <h6 class="mb-3">By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></h6>

                    {!! $post->postBody !!}
                </article>

                <a href="/posts" class="text-decoration-none btn btn-sm btn-secondary bg-dark">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection
