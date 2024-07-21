@extends('layouts.app')


@section('content')
    <h1>Blog Post</h1>
    <a href="{{route('posts.create')}}" class="btn btn-primary">Create New Post</a>
   <!-- <a href="<?php echo route('posts.create') ?>" class="btn btn-primary">Create New Post</a> -->

   <ul>
    @foreach($posts as $post)
        <li>
            <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>

        </li>
    @endforeach
   </ul>
@endsection
