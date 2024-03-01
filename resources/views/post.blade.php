@extends('layout.main')

@section('mainSection')
    <article>
        <h2>{{ $post['postTitle'] }}</h2>
        <h6>By : <a href="/" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
        {!! $post->postBody !!}
    </article>

    <span>Back to <a href="/posts" class="text-decoration-none">Posts</a></span>
@endsection
