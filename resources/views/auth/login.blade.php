@extends('layouts.auth')

@section('title', __('auth.login.title'))

@section('content')

<form method="POST" action="{{ route('login') }}" class="card card-md">
    @csrf
    <div class="card-body">
        <h2 class="mb-3 text-center">@lang('auth.login.title')</h2>

        <div class="mb-3">
            <label class="form-label">@lang('auth.login.fields.email')</label>
            <input class="form-control" type="email" name="email" placeholder="@lang('auth.login.placeholder.email')"
                value="{{ old('email') }}" required autofocus tabindex="1" />
        </div>

        <div class="mb-2">
            <label class="form-label">
                @lang('auth.login.fields.password')
                @if(Route::has('password.request'))
                <span class="form-label-description">
                    <a href="{{ route('password.request') }}">@lang('auth.login.placeholder.forgotpassword')</a>
                </span>
                @endif
            </label>
            <input class="form-control" type="password" name="password"
                placeholder="@lang('auth.login.placeholder.password')" value="{{ old('password') }}" required
                tabindex="2" />
        </div>

        <div class="mb-2">
            <label class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" tabindex="3" />
                <span class="form-check-label">@lang('auth.login.rememberme')</span>
            </label>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100" tabindex="4">@lang('auth.login.submit')</button>
        </div>
    </div>
</form>

@if(Route::has('register'))
<div class="text-center text-muted mt-3">
   @lang('auth.login.registertext') <a href="{{ route('register') }}" tabindex="-1">@lang('auth.login.registerlink')</a>
</div>
@endif

@endsection
