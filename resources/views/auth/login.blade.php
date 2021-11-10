@extends('layouts.auth')

@section('title', 'Login')
@section('content')
<h2 class="auth-heading text-center mb-5">
    Log in to {{ env('APP_NAME') }}
</h2>
<div class="auth-form-container text-start">
    <form class="auth-form login-form" method="POST" action="{{ url('login') }}">
        @csrf
        <div class="email mb-3">
            <label class="sr-only" for="email">
                Email
            </label>
            <input id="email" name="email" type="email"
                class="form-control signin-email" placeholder="Email Address" required="required" autofocus>
        </div>
        <!--//form-group-->
        <div class="password">
            <label class="sr-only" for="password">Password</label>
            <input id="password" name="password" type="password"
                class="form-control signin-password" placeholder="Password" required="required">
            <!--//extra-->
        </div>
        <div class="my-2">
            <div class="extra row justify-content-between">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="remember"
                            id="RememberPassword">
                        <label class="form-check-label" for="RememberPassword">
                            Remember me
                        </label>
                    </div>
                </div>
                <!--//col-6-->
                @if (Route::has('password.request'))
                <div class="col">
                    <div class="forgot-password text-end">
                        <a href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    </div>
                </div>
                @endif
                <!--//col-6-->
            </div>
        </div>
        <!--//form-group-->
        <div class="text-center">
            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">
                Log In
            </button>
        </div>
    </form>

    @if(Route::has('register'))
    <div class="auth-option text-center pt-5">
        No Account? Sign up
        <a class="text-link" href="{{ route('register') }}"> here</a>.
    </div>
    @endif
</div>
@endsection
