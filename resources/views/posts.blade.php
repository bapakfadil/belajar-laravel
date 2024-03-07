@extends('layout.main')

@section('mainSection')
    <h2 class="mb-3 text-center">{{ $title }}</h2>

    <div class="row justify-content-center py-4">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-dark" type="submit" id="">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-5">
            <a href="/posts/{{ $posts[0]->slug }}"><img src="https://source.unsplash.com/1200x800?{{ $posts[0]->category->name }}" class="card-img-top overflow-auto" style="height: 400px; width: 100%;" alt="{{ $posts[0]->category->name }}"></a>
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

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0, 0.7)">
                            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                        </div>
                        <a href="/posts/{{ $post->slug }}"><img src="https://source.unsplash.com/600x200/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"></a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none text-dark">
                                    {{ $post['postTitle'] }}
                                </a>
                            </h5>
                            <small>
                                By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                            <p class="card-text">
                                {{ $post['excerpt'] }}
                            </p>
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-sm btn-secondary bg-dark">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-3 pb-3 border-bottom">
            <h3>
                <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none text-dark">
                    {{ $post['postTitle'] }}
                </a>
            </h3>
            <small>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></small>
            <p class="mt-2">{{ $post['excerpt'] }}</p>
            <a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none btn btn-sm btn-secondary bg-dark">Read More</a>
        </article>
    @endforeach --}}

@endsection
