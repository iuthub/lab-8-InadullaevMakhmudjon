@extends('layouts.admin')
<style>
    .btn{
        margin-top: 10px;
    }
</style>

@section('content')

    <div class="container">
        <form method="post" action="#">

                <label for="form-control">Title</label>
                <input type="text" class="form-control">

                <label for="form-control">Content</label>
                <input type="text" class="form-control">

                <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

@endsection
