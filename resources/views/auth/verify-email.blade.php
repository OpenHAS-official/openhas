@extends('layouts.auth')

@section('title', __('auth.verifyemail.title'))

@section('content')

<form method="POST" action="{{ route('verification.send') }}" class="card card-md">
    @csrf
    <div class="card-body">
        <h2 class="mb-0 text-center">@lang('auth.verifyemail.title')</h2>
        <p class=" mb-3 text-center">@lang('auth.verifyemail.help')</p>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100"
                tabindex="1">@lang('auth.verifyemail.submit')</button>
        </div>
    </div>
</form>

@endsection
