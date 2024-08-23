@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
<<<<<<< HEAD
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Blog Page</a>
=======
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Blog Page</a>
>>>>>>> e7ee49c0c8d38d54ff4a5399fb50cc780ac57a61
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
