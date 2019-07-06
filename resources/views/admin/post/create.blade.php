@extends('layout.master')

@section('title','Post Page')


@section('content')
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            @include('layout.errors')
            <form method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control rounded-0" id="title" name="title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input class="form-control rounded-0" id="author" name="author">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input class="form-control rounded-0" id="category" name="category">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        </div>
    </div>
@endsection