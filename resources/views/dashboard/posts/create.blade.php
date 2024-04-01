@extends('dashboard.layouts.main')

@section('mainContainer')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts">
            @csrf

            {{-- Post Title Input --}}
            <div class="mb-3">
              <label for="postTitle" class="form-label">Post Title</label>
              <input
                type="text"
                class="form-control"
                id="postTitle"
                name="postTitle"
                >
            </div>

            {{-- Post Slug Input --}}
            <div class="mb-3">
              <label for="slug" class="form-label">Post Slug</label>
              <input
                type="text"
                class="form-control"
                id="slug"
                name="slug"
                readonly>
            </div>

            {{-- Select Category Input --}}
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select
                class="form-select"
                name="category_id"
                >
                <option selected>Select Post Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            {{-- Post Body Input using Trix Editor WYSIWYG --}}
            <div class="mb-3">
              <label for="postBody" class="form-label">Post Body</label>
              <input type="hidden" name="postBody" id="postBody">
              <trix-editor input="postBody"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script>
        const postTitle = document.querySelector("#postTitle");
        const slug = document.querySelector("#slug");

        postTitle.addEventListener("keyup", function() {
            let preslug = postTitle.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
