@extends('layouts.admin')

@section('content')

    <div class="container">
        <form method="post" action="#">
            <div class="input-group mb-3">
                <label for="form-control">Title</label>
                <input type="text" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>
            <div class="input-group mb-3">
                <label for="form-control">Content</label>
                <input type="text" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>

            <input type="submit" value="Submit" class="btn-primary">
        </form>
    </div>

@endsection
