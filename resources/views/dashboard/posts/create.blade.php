@extends('dashboard.layouts.main')

@section('mainContainer')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
              <label for="postTitle" class="form-label">Post Title</label>
              <input
                type="text"
                class="form-control"
                id="postTitle"
                name="postTitle"
                >
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Post Slug</label>
              <input
                type="text"
                class="form-control"
                id="slug"
                name="slug"
                >
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

@endsection
