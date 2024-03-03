@extends('layout.main')

@section('mainSection')
    <h2 class="mb-3">{{ $title }}</h2>
    <br>

    @if ($posts->count())
        <div class="card mb-5">
            <a href="/posts/{{ $posts[0]->slug }}"><img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="..."></a>
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"><h3 class="card-title">{{ $posts[0]->postTitle }}</h3></a>
                <small>
                    By <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none text-dark">{{ $posts[0]->author->name }}</a>
                    in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p class="card-text mt-2">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-sm btn-secondary bg-dark">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif


    @foreach ($posts as $post)
        <article class="mb-3 pb-3 border-bottom">
            <h3>
                <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none text-dark">
                    {{ $post['postTitle'] }}
                </a>
            </h3>
            <small>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></small>
            <p class="mt-2">{{ $post['excerpt'] }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-sm btn-secondary bg-dark">Read More</a>
        </article>
    @endforeach
@endsection
