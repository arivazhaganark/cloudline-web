<header>
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-4 col-md-6 col-lg-3 col-xl-3 logo"><a href="{{url('/') }}"><img src="{{asset('images/logo.png')}}" alt=""></a></div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-9 col-xl-9 menu ">
                <nav class="navbar navbar-expand-lg navbar-light "> <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item"> <a class="nav-link" href="{{ url('products') }}"> Products </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('cloudplans') }}">Cloud Plans </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('partner') }}"> Partners </a> </li>
                            <li class="nav-item"> <a class="nav-link" target="_blank" href="https://service.cloudline.video/service/wjoin/"> Join meeting </a> </li>
                            @auth
                                @if(!\Auth::user()->is_admin)
                            <li class="nav-item">
                                <div class="dropdown show">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Welcome {{ \Auth::user()->name }}!
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="{{ url('partner/home') }}" class="dropdown-item"> Dashboard </a>
                                        <a href="{{ url('partner/reseller') }}" class="dropdown-item"> Reseller Account Opening Form </a>
                                        <a href="{{ url('partner/profile') }}" class="dropdown-item"> Profile </a>
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </li>
                                    @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>