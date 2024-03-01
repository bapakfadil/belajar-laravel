@extends('layout.main')

@section('mainSection')
    <article>
        <h2>{{ $post['postTitle'] }}</h2>
        <h6>By : {{ $post['author'] }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        {!! $post->postBody !!}
    </article>

    <span>Back to <a href="/posts">Posts</a></span>
@endsection
