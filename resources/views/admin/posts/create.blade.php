@extends('layouts.admin_layout')


@section('content')
    <h1>Upload Blog Post </h1>
     <a href="{{ url()->previous()}}">Blog Page</a>
  <form action="{{ route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
         <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
         <textarea type="text" name="content" class="form-control" required> </textarea>
    </div>

    <button type="submit" class="btn-primary"> Upload Post </button>
  </form>
@endsection