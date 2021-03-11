@extends('layouts.auth')

@section('title', __('auth.confirmpassword.title'))

@section('content')

<form method="POST" action="{{ route('password.confirm') }}" class="card card-md">
    @csrf
    <div class="card-body">
        <h2 class="mb-0 text-center">@lang('auth.confirmpassword.title')</h2>
        <p class=" mb-3 text-center">@lang('auth.confirmpassword.help')</p>

        <div class="mb-3">
            <label class="form-label">@lang('auth.confirmpassword.password')</label>
            <input class="form-control" type="password" name="password" required tabindex="1" autofocus
                autocomplete="current-password" />
        </div>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100"
                tabindex="2">@lang('auth.confirmpassword.submit')</button>
        </div>
    </div>
</form>

@endsection
