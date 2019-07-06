@extends('layout.master')

@section('title','Post Page')


@section('content')
    <div class="container my-5">
        @include('layout.errors')
        <div class="media table-bordered p-3 mb-3">
            <img src="{{$post->image}}" class="align-self-center mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">{{$post->title}}</h5>
                <p>{{$post->description}}</p>
                <a href="{{url('post/'.$post->id.'/read')}}" class="btn btn-info btn-sm">Read More ...</a>
            </div>
        </div>
    </div>
@endsection