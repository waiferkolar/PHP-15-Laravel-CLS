@extends ("layout.master")

@section('title','Tutorial Detail Page')

@section('content')
    <h1>Hello Tutorials</h1>

    <div class="container">
        <div class="row">
            @foreach($tutus as $tuto)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$tuto->full_name}}</h5>
                            <a href="{{url("admin/tutorial/".strtolower($tuto->id)."/content")}}"
                               class="btn btn-primary">Go
                                somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection