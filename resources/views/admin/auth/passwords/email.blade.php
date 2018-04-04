@extends('admin.layouts.login')

@section('content')
<div class="login-logo">
    <a href="{{url('/') }}"><img src="{{asset('images/logo.png')}}" alt=""></a>
</div>
<div class="login-box-body">
    <p class="login-box-msg">Reset Password</p>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('admin.password.email') }}">
        {{ csrf_field() }}

        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address*">

            @if ($errors->has('email'))
            <span class="text-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group no-margin">
            <button type="submit" class="btn btn-primary btn-block">
                Send Password Reset Link
            </button>
        </div>
    </form>
</div>
@endsection