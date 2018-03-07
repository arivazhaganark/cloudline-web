@extends('admin.layouts.login')

@section('content')
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6  offset-md-2  offset-lg-3 offset-xl-3 partner-login-form">
                    <div class="card-wrapper">
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title"> Reset Password</h4>
                                <form class="form-horizontal" method="POST" action="{{ route('admin.password.request') }}">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
