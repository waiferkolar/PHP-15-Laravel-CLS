<div class="container-fluid bg-dark">
    <nav class="container navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{url("/")}}">
            <img src="{{asset("imgs/coder.png")}}" alt="">
            <span class="text-white ml-3">My Site</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{url('post')}}">@lang('lang.post')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url("tutorial")}}">Tutorial</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Member
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(!Auth::check())
                            <a class="dropdown-item" href="{{url('/login')}}">@lang('lang.login')</a>
                            <a class="dropdown-item" href="{{url('/register')}}">@lang('lang.register')</a>
                        @else
                            <a class="dropdown-item" href="{{url('/logout')}}">@lang('lang.logout')</a>
                        @endif
                    </div>
                </li>
                @if(Auth::check())
                    @if(Auth::user()->hasAnyRole('Admin'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('admin/post')}}">Post</a>
                                <a class="dropdown-item" href="{{url('/register')}}">Register</a>
                                <a class="dropdown-item" href="{{url('/logout')}}">logout</a>
                            </div>
                        </li>
                    @endif
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="ddmnu" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                    </a>
                    <div class="dropdown-menu">
                        @foreach (Config::get('language') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item english" href="{{url('localization/'.$lang)}}">{{$language}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</div>