@extends('layouts.site')

@section('content');
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Partners Dashboard</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <section class="content">
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!--<img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">-->
                                    <span class="hidden-xs">{{ \Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Menu Footer-->
                                    <!--<li class="user-footer">-->
<!--                                        <div class="pull-left">
                                            <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>
                                        </div>-->
                                        <!--<div class="pull-right">-->
                                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                               onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        <!--</div>-->
                                    <!--</li>-->
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
                
                </div>
            </section>
        </div>
    </section>
</div>
@endsection