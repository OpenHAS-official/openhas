@extends('layouts.auth')

@section('title', __('auth.twofactor.title'))

@section('content')

<form method="POST" action="{{ url('/two-factor-challenge') }}" class="card card-md">
    @csrf
    <div class="card-body">
        <h2 class="mb-0 text-center">@lang('auth.twofactor.title')</h2>
        <p class=" mb-3 text-center">@lang('auth.twofactor.help')</p>`

        <div id="code" class="form-group mb-3 ">
            <label class="form-label">@lang('auth.twofactor.code')</label>
            <input type="text" name="code" autofocus autocomplete="one-time-code" class="form-control">
        </div>

        <div id="emergency" class="form-group mb-3 d-none">
            <label class="form-label">@lang('auth.twofactor.emergency')</label>
            <input type="text" name="recovery_code" class="form-control">
        </div>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100" tabindex="1">@lang('auth.twofactor.submit')</button>
        </div>
    </div>
</form>

<div class="text-center text-muted mt-3">
    <a href="#" id="switcher" onclick="event.preventDefault();" data-id="logincode"
        tabindex="-1">@lang('auth.twofactor.loginrecovery')</a>
</div>

<script>

    document.addEventListener("DOMContentLoaded", function () {

        // set variables
        var switcher = $("#switcher");
        var codeElement = $("#code");
        var recoveryElement = $("#emergency");

        switcher.click(function() {
            // get current state
            var current = switcher.attr("data-id");
            // if current state is logincode
            if (current == "logincode") {
                // change current state to recoverycode
                switcher.attr("data-id", "recoverycode");
                // change text of switcher
                switcher.text("@lang('auth.twofactor.logincode')");
                // hide 2fa code input
                codeElement.addClass("d-none");
                // show recovery code input
                recoveryElement.removeClass("d-none");
                // disable input
                recoveryElement.find('input').prop("disabled", false);
                // enable input
                codeElement.find('input').prop("disabled", true);
            } else {
                // change current state to logincode
                switcher.attr("data-id", "logincode");
                // change text of switcher
                switcher.text("@lang('auth.twofactor.loginrecovery')");
                // show 2fa code input
                codeElement.removeClass("d-none");
                // hide recovery code input
                recoveryElement.addClass("d-none");
                // enable input
                recoveryElement.find('input').prop("disabled", true);
                // disable input
                codeElement.find('input').prop("disabled", false);
            }
        });

    });

</script>

@endsection
