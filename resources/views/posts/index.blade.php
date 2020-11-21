@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="mb-4 d-flex align-items-center justify-content-between">
        <h1>Posts</h1>
        <a href="/posts/new" class="btn btn-primary">Create New</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <a onclick="confirmDelete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection


@section('scripts')
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure to delete this post?')) {
                window.location.href = `/posts/${id}/delete`;
            }
        }
    </script>
@endsection
