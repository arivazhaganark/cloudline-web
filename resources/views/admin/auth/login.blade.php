@extends('admin.layouts.login')

@section('content')
<div class="login-logo">
    <a href="{{url('/') }}"><img src="{{asset('images/logo.png')}}" alt=""></a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Sign in</p>
    <form method="POST" action="{{ route('admin.postlogin') }}">
        {{ csrf_field() }}

        <div class="form-group has-feedback">
            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

            <!--<div class="col-md-6">-->
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <!--</div>-->
        </div>

        <div class="form-group has-feedback">
            <!--<label for="password" class="col-md-4 control-label">Password</label>-->

            <!--<div class="col-md-6">-->
            <input id="password" type="password" placeholder="password" class="form-control" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <!--</div>-->
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>

        <a class="btn btn-link" href="{{ route('admin.password.request') }}">
            Forgot Your Password?
        </a>
</div>
</div>
</form>
</div>
@endsection
