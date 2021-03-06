@extends('layouts.admin', ['title' => __('admin.account.security.title'), 'description' => __('admin.account.security.description')])

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
                                                <h1 class="m-0">@lang('admin.account.address.title')</h1>
                                            </div>
                                        </div>
                                        <p>Tabler is a UI kit that speeds up the development process and makes it easier
                                            than ever! Built on the latest version of Bootstrap, it helps you create
                                            templates based on fully customizable and ready-to-use UI components, which can
                                            be used by both simple websites and sophisticated systems. With basic knowledge
                                            of HTML and CSS, you’ll be able to create dashboards that are fully functional
                                            and beautifully designed!</p>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3>Getting started</h3>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            - <a href="../docs/getting-started.html">Getting Started</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/download.html">Download</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>Content</h3>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            - <a href="../docs/colors.html">Colors</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/typography.html">Typography</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/icons.html">Icons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>Form components</h3>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            - <a href="../docs/form-elements.html">Form elements</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/form-helpers.html">Form helpers</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/form-validation.html">Validation states</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/form-image-check.html">Image check</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/form-color-check.html">Color check</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/form-selectboxes.html">Form selectboxes</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/form-fieldset.html">Form fieldset</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12" id="password">
                                                    <h3>Components</h3>
                                                    <ul class="list-unstyled columns-md-2">
                                                        <li>
                                                            - <a href="../docs/alerts.html">Alerts</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/avatars.html">Avatars</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/badges.html">Badges</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/breadcrumb.html">Breadcrumb</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/cards.html">Cards</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/carousel.html">Carousel</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/dropdowns.html">Dropdowns</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/divider.html">Divider</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/empty.html">Empty states</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/modals.html">Modals</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/page-headers.html">Page headers</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/progress.html">Progress</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/range-slider.html">Range slider</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/ribbons.html">Ribbons</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/skeleton.html">Skeleton</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/spinners.html">Spinners</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/steps.html">Steps</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/switch-icon.html">Switch icon</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/tables.html">Tables</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/tabs.html">Tabs</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/timelines.html">Timelines</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/toasts.html">Toasts</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/tooltips.html">Tooltips</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>Utilities</h3>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            - <a href="../docs/borders.html">Borders</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/cursors.html">Cursors</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/interactions.html">Interactions</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3>Plugins</h3>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            - <a href="../docs/autosize.html">Autosize</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/input-mask.html">Form input mask</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/flags.html">Flags</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/payments.html">Payments</a>
                                                        </li>
                                                        <li>
                                                            - <a href="../docs/charts.html">Charts</a>
                                                        </li>
                                                    </ul>
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

@endsection
