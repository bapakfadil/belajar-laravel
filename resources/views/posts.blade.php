@extends('layout.main')

@section('mainSection')
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
