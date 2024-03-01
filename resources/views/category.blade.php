@extends('layout.main')

@section('mainSection')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-2">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">
                    {{ $post['postTitle'] }}
                </a>
            </h2>
            <span>Oleh : {{ $post['author'] }}</span>
            <p>{{ $post['excerpt'] }}</p>
        </article>
    @endforeach

    <a href="/posts">Back to posts</a>
@endsection
