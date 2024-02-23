@extends('layout.main')

@section('mainSection')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">
                    {{ $post['postTitle'] }}
                </a>
            </h2>
            <h6>Oleh : {{ $post['author'] }}</h6>
            <p>{{ $post['postBody'] }}</p>
        </article>
    @endforeach
@endsection
