@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{$error}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif

@if(session('msg_success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('msg_success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(isset($msg_success))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{isset($msg_success)}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('msg_error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('msg_error')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(isset($msg_error))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{isset($msg_error)}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif