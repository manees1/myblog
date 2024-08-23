@extends('layouts.admin_layout')

@section('content')

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Post</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a class="btn btn-primary" href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-outline-secondary">Create New Post</a>
            
          </div>
         
        </div>
      </div>

   

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @php $i = 0; @endphp
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <form action="{{ route('admin.posts.destroy',$post->id) }}" method="POST">
                
                    <a class="btn btn-success" href="{{ route('admin.posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('admin.posts.edit',$post->id) }}">Edit</a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- {!! $posts->links() !!} -->
@endsection

