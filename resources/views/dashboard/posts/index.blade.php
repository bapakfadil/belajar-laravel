@extends('dashboard.layouts.main')

@section('mainContainer')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="text-decoration-none btn btn-sm btn-secondary bg-dark mb-3"><span data-feather="file-plus"></span> Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->postTitle }}</td>
                <td>{{ $post->category->name }}</td></td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-dark"><span data-feather="eye"></span></a>
                    <a href="#" class="badge bg-warning text-dark"><span data-feather="file-text"></span></a>
                    <a href="#" class="badge bg-danger text-dark"><span data-feather="trash-2"></span></a>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
