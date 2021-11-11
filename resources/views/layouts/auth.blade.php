<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5 d-flex">
            <div class="d-flex flex-column align-content-end my-auto mx-auto">
                <div class="app-auth-body mx-auto my-auto">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="{{ route('home') }}">
                            <img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo">
                        </a>
                    </div>
                    @if($errors->any())
                    <div class="app-card shadow-sm mb-4 border-left-decoration border-danger">
                        <div class="inner">
                            <div class="app-card-body py-4 px-2">
                                {{ $errors->first() }}
                            </div><!--//app-card-body-->
                        </div><!--//inner-->
                    </div>
                    @endif

                    @yield('content')
                    <!--//auth-form-container-->

                </div>
                <!--//auth-body-->

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                        <small class="copyright">
                            <span>
                                Designed by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a>
                            </span>
                            <span class="user-select-none"> | </span>
                            <span>
                                Software by <a href="https://www.proxeuse.com/" class="app-link" target="_blank">Proxeuse</a>
                            </span>
                        </small>
                    </div>
                </footer>
                <!--//app-auth-footer-->
            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h5 class="mb-3 overlay-title">
                            Discover OpenHAS
                        </h5>
                        <div>
                            OpenHAS is the ideal software for your business. Thanks to our ready-made integrations with Plesk, cPanel, Stripe, PayPal and OpenProvider,
                            among others, you can automate your hosting provisioning, domain sales or web sales in no time.
                            Are you new to OpenHAS? Please read the installation manual on our website first. Thanks for installing!
                        </div>
                    </div>
                </div>
            </div>
            <!--//auth-background-overlay-->
        </div>
        <!--//auth-background-col-->

    </div>
    <!--//row-->


</body>

</html>
