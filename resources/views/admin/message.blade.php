@extends('layout.master')

@section('title','Message Page')

@section('content')

    <div class="container my-5">
        <a href="{{url('admin/role_permission')}}" class="btn btn-primary">Create RP</a>
        <h1 class="text-center text-info">Users</h1>

        {{--User Table--}}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Since</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>1</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->toFormattedDateString()}}</td>
                    <td>
                        <a href="{{url("admin/role/".$user->id."/edit")}}" class="btn btn-primary btn-sm">Role</a>
                        <a href="{{url("admin/permission/".$user->id."/edit")}}"
                           class="btn btn-info btn-sm">Permission</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--User Table--}}

    </div>
@endsection