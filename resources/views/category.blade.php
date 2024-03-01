@extends('layout.main')

@section('mainSection')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-2">
            <h2>
                <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none">
                    {{ $post['postTitle'] }}
                </a>
            </h2>
            <span>Oleh : {{ $post['author'] }}</span>
            <p>{{ $post['excerpt'] }}</p>
        </article>
    @endforeach

    <span>Back to <a href="/posts" class="text-decoration-none">Posts</a> or see all <a href="/categories" class="text-decoration-none">Categories</a></span>
@endsection
