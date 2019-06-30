@extends('layout.master')

@section('title','Permission Editor')


@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <h3>Available Roles</h3>
                <ul class="list-group">
                    @foreach($roles as $role)
                        @if(!$user->hasAnyRole($role->name))
                            <li class="list-group-item rounded-0 justify-content-between d-flex">
                                <span>{{$role->name}}</span>
                                <span class="text-primary" style="cursor:pointer">
                                        <a href="{{url("admin/role/".$user->id."/add/".$role->name)}}"><i
                                                    class="fa fa-plus"></i></a>
                                    </span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 offset-md-1">
                <h3>{{$user->name}}'s Roles</h3>
                <ul class="list-group">
                    @foreach($user->roles as $role)
                        <li class="list-group-item rounded-0
                        justify-content-between d-flex">
                            <span>{{$role->name}}</span>
                            <span style="cursor:pointer">
                                <a href="{{url("admin/role/".$user->id."/remove/".$role->name)}}"><i
                                            class="fa fa-minus text-danger"></i></a>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection