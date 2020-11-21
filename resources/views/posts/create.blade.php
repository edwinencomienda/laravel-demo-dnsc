
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Create</h1>

    <form method="POST" action="/posts">
        @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Body</label>
          <input name="body" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
