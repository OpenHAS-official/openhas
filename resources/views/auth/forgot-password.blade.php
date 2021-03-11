@extends('layouts.auth')

@section('title', __('auth.forgotpassword.title'))

@section('content')

<form method="POST" action="{{ route('password.email') }}" class="card card-md">
    @csrf
    <div class="card-body">
        <h2 class="mb-0 text-center">@lang('auth.forgotpassword.title')</h2>
        <p class=" mb-3 text-center">@lang('auth.forgotpassword.help')</p>

        <div class="mb-3">
            <label class="form-label">@lang('auth.forgotpassword.email')</label>
            <input class="form-control" type="email" name="email"
                value="{{ old('email') }}" required autofocus tabindex="1" />
        </div>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100" tabindex="2">@lang('auth.forgotpassword.submit')</button>
        </div>
    </div>
</form>

@if(Route::has('login'))
<div class="text-center text-muted mt-3">
   <a href="{{ route('login') }}" tabindex="-1">@lang('auth.forgotpassword.goback')</a>
</div>
@endif

@endsection
