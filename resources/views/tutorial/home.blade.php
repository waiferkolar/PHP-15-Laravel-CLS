@extends ("layout.master")

@section('title','Tutorial Home Page')

@section('content')
    <h1>Hello Tutorials</h1>

    <div class="container">
        <div class="row">
            @foreach($tutus as $tuto)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$tuto}}</h5>
                            <a href="{{url("tutorial/".strtolower($tuto)."/detail")}}" class="btn btn-primary">Go
                                somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection