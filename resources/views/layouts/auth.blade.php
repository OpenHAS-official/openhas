<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

    <!-- Tabler Core -->
    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!-- Tabler Plugins -->
    <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-buttons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/smartwizard/dist/css/smart_wizard_arrows.min.css') }}" rel="stylesheet" />

    <!-- SEO -->
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.svg') }}" height="50" alt="Logo">
                </a>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ __('auth.error') }}: {{ $errors->first() }}
            </div>
            @endif
            @if (session('status') != 'verification-link-sent' && !empty(session('status')))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @elseif (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    @lang('auth.verifyemail.success')
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('libs/smartwizard/dist/js/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('js/tabler.min.js') }}"></script>
</body>

</html>
