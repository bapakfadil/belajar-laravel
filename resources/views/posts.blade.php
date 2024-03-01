@extends('layout.main')

@section('mainSection')
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
@endsection
