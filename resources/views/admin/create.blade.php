@extends('layout.header')
@section('page-title')
    Create Post
@endsection

@section('main-content')
    @include('partials.errors')
    <form action="/admin/create" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title:</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-2 control-label">Content:</label>
            <div class="col-sm-10">
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
            </div>
        </div>
        {{ csrf_field() }}
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
@endsection