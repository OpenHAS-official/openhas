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
                                                <h1 class="m-0">@lang('admin.account.index.title')</h1>
                                            </div>
                                        </div>
                                        <p>@lang('admin.account.index.description')</p>
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
