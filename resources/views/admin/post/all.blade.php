@extends('layout.master')

@section('title','Post Page')


@section('content')
    <div class="container my-2">
        @include('layout.errors')
        <a href="{{url('admin/create/post')}}" class="btn btn-primary btn-sm mb-3">Create <i class="fa fa-plus"></i></a>

        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    @foreach($permissions as $permit)
                        <li class="list-group-item rounded-0">
                            <a href="{{url('admin/post/'.$permit->id)}}">{{$permit->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                @foreach($posts as $post)
                    <div class="media table-bordered p-3 mb-3">
                        <img src="{{$post->image}}" class="align-self-center mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">{{$post->title}}</h5>
                            <p>{{$post->description}}</p>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection