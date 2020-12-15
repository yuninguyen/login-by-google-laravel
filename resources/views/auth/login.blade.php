@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                <img class="img-logo" src="https://upload.wikimedia.org/wikipedia/commons/4/49/Bitkub.com_logo.png" alt="">
                <!-- <h2 class="text-center">Sign in</h2> -->

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-lg"></i>
                            </span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block login-btn">{{ __('Sign in') }}</button>
                </div>

                <div class="clearfix">
                    <label class="float-left form-check-label ml-4"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="float-right text-dark">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>

                <div class="or-seperator"><i>or</i></div>
                <a href="{{ url('auth/google') }}" class="btn btn-danger btn-block"><i class="fa fa-google-plus"></i>&ensp;Sign in with&nbsp;<b>Google</b></a>

            </form>
        </div>
    </div>
</div>
@endsection