@extends('layout.main')

@section('mainSection')
    <h2 class="mb-3">{{ $title }}</h2>
    <br>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif


    @foreach ($posts as $post)
        <article class="mb-3 pb-3 border-bottom">
            <h2>
                <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none">
                    {{ $post['postTitle'] }}
                </a>
            </h2>
            <h6>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
            <p>{{ $post['excerpt'] }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection
