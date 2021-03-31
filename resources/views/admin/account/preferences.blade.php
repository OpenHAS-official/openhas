@extends('layouts.admin', ['title' => __('admin.account.preferences.title'), 'description' =>
__('admin.account.preferences.description')])

@section('content')
<div class="page-wrapper">
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
                <div class="page-body">
                    <div class="row gx-lg-4">
                        @include('admin.account.sidebar')
                        <div class="col-lg-9">
                            <div class="card card-lg">
                                <div class="card-body">
                                    <div class="markdown">
                                        <div>
                                            <div class="d-flex mb-3">
                                                <h1 class="m-0">@lang('admin.account.preferences.title')</h1>
                                            </div>
                                        </div>
                                        <p>Tabler is a UI kit that speeds up the development process and makes it easier
                                            than ever! Built on the latest version of Bootstrap, it helps you create
                                            templates based on fully customizable and ready-to-use UI components, which can
                                            be used by both simple websites and sophisticated systems. With basic knowledge
                                            of HTML and CSS, you’ll be able to create dashboards that are fully functional
                                            and beautifully designed!</p>
                                        <div class="mt-4">
                                            <div id="theme">
                                                <div class="form-selectgroup-boxes row mb-3">
                                                    <div class="col-lg-4">
                                                        <label class="form-selectgroup-item">
                                                            <input type="radio" name="theme" value="default"
                                                                class="form-selectgroup-input" checked>
                                                            <span
                                                                class="form-selectgroup-label d-flex align-items-center p-3">
                                                                <span class="me-3">
                                                                    <span class="form-selectgroup-check"></span>
                                                                </span>
                                                                <span class="form-selectgroup-label-content">
                                                                    <span class="form-selectgroup-title strong mb-1">
                                                                        @lang('admin.account.preferences.theme.defaulttitle')
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-tabler icon-tabler-brightness preferences-icon"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            stroke-width="2" stroke="currentColor"
                                                                            fill="none" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none"></path>
                                                                            <circle cx="12" cy="12" r="9"></circle>
                                                                            <line x1="12" y1="3" x2="12" y2="21"></line>
                                                                            <line x1="12" y1="9" x2="16.65" y2="4.35">
                                                                            </line>
                                                                            <line x1="12" y1="14.3" x2="19.37" y2="6.93">
                                                                            </line>
                                                                            <line x1="12" y1="19.6" x2="20.85" y2="10.75">
                                                                            </line>
                                                                        </svg>
                                                                    </span>
                                                                    <span
                                                                        class="d-block text-muted">@lang('admin.account.preferences.theme.defaultdescription')</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="form-selectgroup-item">
                                                            <input type="radio" name="theme" value="dark"
                                                                class="form-selectgroup-input">
                                                            <span
                                                                class="form-selectgroup-label d-flex align-items-center p-3">
                                                                <span class="me-3">
                                                                    <span class="form-selectgroup-check"></span>
                                                                </span>
                                                                <span class="form-selectgroup-label-content">
                                                                    <span class="form-selectgroup-title strong mb-1">
                                                                        @lang('admin.account.preferences.theme.darktitle')
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-tabler icon-tabler-moon preferences-icon"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            stroke-width="2" stroke="currentColor"
                                                                            fill="none" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none"></path>
                                                                            <path
                                                                                d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                    <span
                                                                        class="d-block text-muted">@lang('admin.account.preferences.theme.darkdescription')</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="form-selectgroup-item">
                                                            <input type="radio" name="theme" value="light"
                                                                class="form-selectgroup-input">
                                                            <span
                                                                class="form-selectgroup-label d-flex align-items-center p-3">
                                                                <span class="me-3">
                                                                    <span class="form-selectgroup-check"></span>
                                                                </span>
                                                                <span class="form-selectgroup-label-content">
                                                                    <span class="form-selectgroup-title strong mb-1">
                                                                        @lang('admin.account.preferences.theme.lighttitle')
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-tabler icon-tabler-sun preferences-icon"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            stroke-width="2" stroke="currentColor"
                                                                            fill="none" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none"></path>
                                                                            <circle cx="12" cy="12" r="4"></circle>
                                                                            <path
                                                                                d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                    <span
                                                                        class="d-block text-muted">@lang('admin.account.preferences.theme.lightdescription')</span>
                                                                </span>
                                                            </span>
                                                        </label>
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var rad = document.querySelectorAll('input[type=radio][name="theme"]');
    for (var i = 0; i < rad.length; i++) {
        rad[i].addEventListener('change', function() {
            updateThemeBySelect(this.value);
        });
    }
</script>
@endsection
