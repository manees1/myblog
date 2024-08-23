@extends('layouts.admin_layout')


@section('content')
    <h1>Blog Post Description</h1>
     <a href="{{ url()->previous()}}">Blog Page</a>
   <ul>
        <li>ID: {{$post->id}}</li>
        <li>Title: {{$post->title}}</li>
        <li>Description: {{$post->content}}</li>
<<<<<<< HEAD:resources/views/admin/posts/show.blade.php
        
=======
        <li>Description: {{->content}}</li>
>>>>>>> e7ee49c0c8d38d54ff4a5399fb50cc780ac57a61:resources/views/Posts/show.blade.php

   </ul>
@endsection
 