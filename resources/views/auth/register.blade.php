@extends('layouts.auth')

@section('title', 'Register')
@section('content')
<h2 class="auth-heading text-center mb-5">
    Register at {{ env('APP_NAME') }}
</h2>
<div class="auth-form-container text-start">
    <form class="auth-form login-form" method="POST" action="{{ url('register') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 pe-md-1">
                <label class="sr-only" for="email">
                    First Name
                </label>
                <input id="firstname" name="firstname" type="text"
                    class="form-control signin-firstname" placeholder="First Name" required="required" autofocus>
            </div>
            <div class="col-md-6 ps-md-1">
                <label class="sr-only" for="email">
                    Last Name
                </label>
                <input id="lastname" name="lastname" type="text"
                    class="form-control signin-lastname" placeholder="Last Name" required="required">
            </div>
        </div>
        <div class="email mb-3">
            <label class="sr-only" for="email">
                Email
            </label>
            <input id="email" name="email" type="email"
                class="form-control signin-email" placeholder="Email Address" required="required">
        </div>
        <div class="password mb-3">
            <label class="sr-only" for="password">Password</label>
            <input id="password" name="password" type="password"
                class="form-control signin-password" placeholder="Password" required="required">
        </div>
        <div class="text-center">
            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">
                Register
            </button>
        </div>
    </form>

    <div class="auth-option text-center pt-5">
        Already have an account?
        <a class="text-link" href="{{ route('login') }}">Log in</a>.
    </div>
</div>
@endsection
