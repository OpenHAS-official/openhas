@extends('layouts.admin', ['title' => __('admin.account.security.title'), 'description' =>
__('admin.account.security.description')])

@section('content')
<div class="content">
    <div class="container-xl">
        <div class="content">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                @lang('admin.account.title')
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row gx-lg-4">
                    @include('admin.account.sidebar')
                    <div class="col-lg-9">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first() }}
                        </div>
                        @endif

                        <div class="card card-lg">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex mb-3">
                                        <h1 class="m-0">@lang('admin.account.security.title')</h1>
                                    </div>
                                </div>
                                <p>@lang('admin.account.security.description')</p>

                                <div class="mt-4">

                                    @if(!auth()->user()->two_factor_secret)

                                    {{-- 2FA Disabled --}}
                                    <h3 id="2fa">@lang('admin.account.security.2fa.title')</h3>
                                    <p>@lang('admin.account.security.2fa.description')</p>
                                    <div class="alert alert-danger">
                                        @lang('admin.account.security.2fa.disabled')
                                    </div>
                                    <button class="btn btn-primary" onclick="event.preventDefault(); enable2FA();" id="enable2FAButton"
                                        data-bs-target="#enabletwofactormodal">
                                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status"
                                            id="enable2FAButtonSpinner"></span>
                                        @lang('admin.account.security.2fa.enable.openbutton')
                                    </button>
                                    <div id="qr"></div>

                                    @else

                                    {{-- 2FA Enabled --}}
                                    <h3 id="2fa">@lang('admin.account.security.2fa.title')</h3>
                                    <p>@lang('admin.account.security.2fa.description')</p>
                                    <div class="alert alert-success">
                                        @lang('admin.account.security.2fa.enabled')
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#twofactorrecoverymodal">
                                        @lang('admin.account.security.2fa.recovery.openbutton')
                                    </button>
                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#disabletwofactormodal">
                                        @lang('admin.account.security.2fa.disable.openbutton')
                                    </button>

                                    @endif
                                </div>

                                <div class="mt-4">
                                    <h3 id="password">@lang('admin.account.security.password.title')</h3>
                                    <p>@lang('admin.account.security.password.description')</p>
                                    <form action="{{ route('user-password.update') }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="mb-3">
                                            <label
                                                class="form-label">@lang('admin.account.security.password.current')</label>
                                            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required
                                                autocomplete="current-password" />
                                        </div>

                                        <div class="mb-3">
                                            <label
                                                class="form-label">@lang('admin.account.security.password.new')</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required
                                                autocomplete="new-password" />
                                        </div>

                                        <div class="mb-3">
                                            <label
                                                class="form-label">@lang('admin.account.security.password.confirm')</label>
                                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                required autocomplete="new-password" />
                                        </div>

                                        <input type="submit"
                                            class="btn btn-primary" value="@lang('admin.account.security.password.save')"/>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('modals')
@if(auth()->user()->two_factor_secret)
<div class="modal fade" id="twofactorrecoverymodal" tabindex="-1" aria-labelledby="twofactorrecoverymodalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="twofactorrecoverymodalLabel">
                    @lang('admin.account.security.2fa.recovery.title')
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>@lang('admin.account.security.2fa.recovery.description')</p>
                <ul class="list-group">
                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                    <li class="list-group-item">
                        {{ $code }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    onclick='event.preventDefault(); document.getElementById("regenerateCodeForm").submit();'>@lang('admin.account.security.2fa.recovery.regenerate')</button>
                <button type="button" class="btn btn-primary"
                    data-bs-dismiss="modal">@lang('admin.account.security.2fa.recovery.close')</button>
            </div>
            <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}" id="regenerateCodeForm">
                @csrf
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="disabletwofactormodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-alert-triangle mb-2 text-danger icon-lg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 9v2m0 4v.01"></path>
                    <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75">
                    </path>
                </svg>
                <h3>@lang('admin.account.security.2fa.disable.title')</h3>
                <div class="text-muted">@lang('admin.account.security.2fa.disable.description')</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-white w-100" data-bs-dismiss="modal">
                                @lang('admin.account.security.2fa.disable.cancel')
                            </button>
                        </div>
                        <div class="col">
                            <form action="{{ url('user/two-factor-authentication') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-danger w-100">@lang('admin.account.security.2fa.disable.proceed')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="enabletwofactormodal" tabindex="-1" aria-labelledby="enabletwofactormodalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enabletwofactormodalLabel">
                    @lang('admin.account.security.2fa.enable.title')
                </h5>
            </div>
            <div class="modal-body">
                <p>@lang('admin.account.security.2fa.enable.description')</p>
                <div id="qr-code" class="align-center"></div>
            </div>
            <div class="modal-footer">
                <form action="{{ url('user/two-factor-authentication') }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        @lang('admin.account.security.2fa.enable.cancel')
                    </button>
                </form>
                <button class="btn btn-primary" id="enabletwofactormodalfinishbutton" disabled>
                    <div class="spinner-border spinner-border-sm me-2" role="status" id="enabletwofactormodalfinishspinner"></div>
                    @lang('admin.account.security.2fa.enable.finish')
                </button>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('scripts')
<script>
    var enableTwoFactor = document.getElementById('enabletwofactormodal')
    var enableTwoFactorModal = new bootstrap.Modal(enableTwoFactor, {keyboard: false, backdrop: 'static'});

    function httpGet(theUrl, callback) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
                callback(xmlHttp.responseText);
        }
        xmlHttp.open("GET", theUrl, true); // true for asynchronous
        xmlHttp.send(null);
    }

    function httpPost(theUrl, params, callback) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
                callback(xmlHttp.responseText);
        }
        xmlHttp.open("POST", theUrl, true); // true for asynchronous
        xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlHttp.send(params);

    }

    function enable2FA() {
        document.getElementById("enable2FAButtonSpinner").classList.remove("d-none");
        document.getElementById("enable2FAButton").disabled = true;

        var label = document.getElementById("statusLabel2FA");
        label.innerHTML = "@lang('admin.account.pending')";
        label.classList.remove("bg-danger");
        label.classList.remove("bg-success");
        label.classList.add("bg-gray");

        httpPost("{{ url('/user/two-factor-authentication') }}", '_token={{ csrf_token() }}', function (response) {
            enableTwoFactorModal.show();
            generateQR();
        });
    }

    function generateQR() {
        httpGet("{{ url('/user/two-factor-qr-code') }}", function (response) {
            var response = JSON.parse(response);
            document.getElementById("qr-code").innerHTML = response.svg;
            setTimeout(function () {
                document.getElementById("enabletwofactormodalfinishspinner").classList.add("d-none");
                document.getElementById("enabletwofactormodalfinishbutton").disabled = false;
                document.getElementById("enabletwofactormodalfinishbutton").addEventListener("click", function() {
                    location.reload();
                });
            }, 5000);
        });
    }

</script>
@endsection
