@extends('layouts.admin_layout')


@section('content')
    <h1>Blog Post Description</h1>
     <a href="{{ url()->previous()}}">Blog Page</a>
   <ul>
        <li>ID: {{$post->id}}</li>
        <li>Title: {{$post->title}}</li>
        <li>Description: {{$post->content}}</li>


        <li>Description: {{->content}}</li>

   </ul>
@endsection
 