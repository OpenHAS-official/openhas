@extends('layouts.auth')

@section('title', __('auth.resetpassword.title'))

@section('content')

<form method="POST" action="{{ route('password.update') }}" class="card card-md">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <input type="hidden" name="email" value="{{ $request->email }}">
    <div class="card-body">
        <h2 class="mb-0 text-center">@lang('auth.resetpassword.title')</h2>
        <p class=" mb-3 text-center">@lang('auth.resetpassword.help')</p>

        <div class="mb-3">
            <label class="form-label">@lang('auth.resetpassword.password')</label>
            <input class="form-control" type="password" name="password" required tabindex="1" autofocus
                autocomplete="new-password" />
        </div>

        <div>
            <label class="form-label">@lang('auth.resetpassword.passwordconfirmation')</label>
            <input class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" tabindex="2" />
        </div>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100"
                tabindex="3">@lang('auth.resetpassword.submit')</button>
        </div>
    </div>
</form>

@endsection
