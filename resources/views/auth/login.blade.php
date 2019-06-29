@extends('layout.master')
@section('title','Register Page')

@section('content')
    <div class="container">
        @include("layout.errors")
        <div class="col-md-6 offset-md-3">
            <h1 class="mt-5 text-center text-info mb-5">Login Here</h1>
            <form class="table table-bordered p-5" method="post" action="{{url("/login")}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control rounded-0" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control rounded-0" id="password" name="password">
                </div>
                <div class="row justify-content-end no-gutters">
                    <button type="reset" class="btn btn-outline-warning mr-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

            </form>
        </div>
    </div>
@endsection