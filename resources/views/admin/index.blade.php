@extends('layouts.admin')

@section('content')

    <div class="container">
        <a class="btn btn-success" href="{{ route('admin_create') }}">New Post</a>
        <hr/>
        <p>Learning Laravel <span><a href="#">Edit</a></span></p>
    </div>
@endsection
