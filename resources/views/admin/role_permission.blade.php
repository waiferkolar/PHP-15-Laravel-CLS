@extends('layout.master')

@section('title','Roles And Permission Page')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <h2>Role Walker</h2>
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <input class="form-control rounded-0" placeholder="Role Name" name="name">
                        <button type="submit" class="btn btn-primary rounded-0"><i class="fa fa-plus"></i></button>
                    </div>

                </form>
                <ul class="list-group">
                    @foreach($roles as $role)
                        <li class="list-group-item rounded-0 justify-content-between d-flex">
                            {{$role->name}}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 offset-md-1">
                <h2>Permission Walker</h2>
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <input class="form-control rounded-0" placeholder="Permission Name" name="name">
                        <button type="submit" class="btn btn-primary rounded-0"><i class="fa fa-plus"></i></button>
                    </div>

                </form>
                <ul class="list-group">
                    @foreach($permissions as $permission)
                        <li class="list-group-item rounded-0 justify-content-between d-flex">
                            {{$permission->name}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection