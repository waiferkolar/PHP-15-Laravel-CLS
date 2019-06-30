@extends ("layout.master")

@section('title','Tutorial Home Page')

@section('content')
    <div class="container">
        <div class="col-md-4 offset-md-4">
            <h2>{{$tutorial->name}}</h2>
            <h5>{{$tutorial->full_name}}</h5>
            <h5>{{$tutorial->link}}</h5>
            <h5>{{$tutorial->cat_id}}</h5>
            <h5>{{$tutorial->id}}</h5>
        </div>
    </div>
    <a href="{{url('admin/message')}}" class="btn btn-primary btn-sm">To Message</a>
@endsection