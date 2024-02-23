@extends('layout.main')

@section('mainSection')
    <article>
        <h2>{{ $post['postTitle'] }}</h2>
        <h6>By : {{ $post['author'] }}</h6>
        <p>{{ $post['postBody'] }}</p>
    </article>

    <a href="/blog">Back to posts</a>
@endsection
