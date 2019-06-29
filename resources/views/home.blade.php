@extends('layout.master')

@section('title',"Home Page")

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="row no-gutters">
            <div class="col-md-6">
                <h1 class="text-center">Best Online Course</h1>
                <h6 class="text-center">There is a need, there is a way</h6>
                <div class="row justify-content-center mt-5">
                    <a href="{{url("/login")}}" class="btn btn-outline-info mr-3">Login</a>
                    <a href="{{url("/register")}}" class="btn btn-outline-success">Register</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-8 offset-md-2">
                    {{--Slide Show--}}
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                         data-interval="1000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset("imgs/uni_1.jpg")}}" class="d-block my_slide_img" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("imgs/uni_2.jpg")}}" class="d-block  my_slide_img" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("imgs/uni_3.jpg")}}" class="d-block  my_slide_img" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("imgs/uni_4.jpg")}}" class="d-block  my_slide_img" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("imgs/uni_5.jpg")}}" class="d-block  my_slide_img" alt="...">
                            </div>
                        </div>
                    </div>
                    {{--Slide End --}}
                </div>
            </div>
        </div>
    </div>
@endsection