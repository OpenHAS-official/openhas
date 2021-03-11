@extends('layouts.auth')

@section('title', __('auth.register.title'))

@section('content')

<form method="POST" action="{{ route('register') }}" class="card card-md sw-justified sw-theme-arrows" id="wizard">
    @csrf
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#personal-details">
                @lang('auth.register.step1')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#account-details">
                @lang('auth.register.step2')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#address-details">
                @lang('auth.register.step3')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#company-details">
                @lang('auth.register.step4')
            </a>
        </li>
    </ul>
    <div class="card-body">

        <h2 class="mb-3 text-center">@lang('auth.register.title')</h2>

        <div class="tab-content">
            <div id="personal-details" class="tab-pane form-step-1" role="tabpanel" aria-labelledby="personal-details">
                <h3>@lang('auth.register.personal')</h3>
                <div class="mb-3">
                    <label class="form-label" for="firstname">@lang('auth.register.fields.firstname')</label>
                    <input class="form-control" type="text" name="firstname"
                        placeholder="@lang('auth.register.placeholder.firstname')" value="{{ old('firstname') }}"
                        required autofocus tabindex="1" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="lastname">@lang('auth.register.fields.lastname')</label>
                    <input class="form-control" type="text" name="lastname"
                        placeholder="@lang('auth.register.placeholder.lastname')" value="{{ old('lastname') }}" required
                        tabindex="2" />
                </div>

                <div>
                    <label class="form-label" for="phone">@lang('auth.register.fields.phone')</label>
                    <input class="form-control" type="text" name="phone"
                        placeholder="@lang('auth.register.placeholder.phone')" value="{{ old('phone') }}"
                        tabindex="3" />
                </div>
            </div>

            <div id="account-details" class="tab-pane form-step-2" role="tabpanel" aria-labelledby="account-details"
                style="display:none;">
                <h3>@lang('auth.register.account')</h3>
                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.email')</label>
                    <input class="form-control" type="email" name="email"
                        placeholder="@lang('auth.register.placeholder.email')" value="{{ old('email') }}" required
                        tabindex="4" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.password')</label>
                    <input class="form-control" type="password" name="password"
                        placeholder="@lang('auth.register.placeholder.password')" value="{{ old('password') }}" required
                        tabindex="5" autocomplete="new-password" />
                </div>

                <div>
                    <label class="form-label">@lang('auth.register.fields.passwordconfirmation')</label>
                    <input class="form-control" type="password" name="password_confirmation"
                        placeholder="@lang('auth.register.placeholder.passwordconfirmation')" required tabindex="6"
                        autocomplete="new-password" tabindex="6"/>
                </div>
            </div>

            <div id="address-details" class="tab-pane form-step-3" role="tabpanel" aria-labelledby="address-details"
                style="display:none;">
                <h3>@lang('auth.register.address')</h3>
                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.address1')</label>
                    <input class="form-control" type="text" name="address1"
                        placeholder="@lang('auth.register.placeholder.address1')" value="{{ old('address1') }}" required
                        tabindex="7" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.address2')</label>
                    <input class="form-control" type="text" name="address2"
                        placeholder="@lang('auth.register.placeholder.address2')" value="{{ old('address2') }}"
                        tabindex="8" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.postcode')</label>
                    <input class="form-control" type="text" name="postcode"
                        placeholder="@lang('auth.register.placeholder.postcode')" value="{{ old('postcode') }}" required
                        tabindex="9" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.city')</label>
                    <input class="form-control" type="text" name="city"
                        placeholder="@lang('auth.register.placeholder.city')" value="{{ old('city') }}" required tabindex="10" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.state_region')</label>
                    <input class="form-control" type="text" name="state_region"
                        placeholder="@lang('auth.register.placeholder.state_region')"
                        value="{{ old('state_region') }}" tabindex="11"/>
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.country')</label>
                    <select class="form-control" name="country" required tabindex="12">
                        @include('includes.countries')
                    </select>
                </div>
            </div>

            <div id="company-details" class="tab-pane form-step-4" role="tabpanel" aria-labelledby="company-details"
                style="display:none;">
                <h3>@lang('auth.register.company')</h3>
                <p>@lang('auth.register.companydisclaimer')</p>
                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.company')</label>
                    <input class="form-control" type="text" name="company"
                        placeholder="@lang('auth.register.placeholder.company')" value="{{ old('company') }}" tabindex="13" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.vat')</label>
                    <input class="form-control" type="text" name="metadata[company][vat]"
                        placeholder="@lang('auth.register.placeholder.vat')"
                        value="{{ old('metadata.company.vat') }}" tabindex="13" />
                </div>

                <div class="mb-3">
                    <label class="form-label">@lang('auth.register.fields.registration')</label>
                    <input class="form-control" type="text" name="metadata[company][registration]"
                        placeholder="@lang('auth.register.placeholder.registration')"
                        value="{{ old('metadata.company.registration') }}" tabindex="15" />
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {

        var btnFinish = $('<button></button>').text("{{ __('auth.register.submit') }}")
                                  .addClass('btn btn-info sw-btn-group-extra d-none')
                                  .on('click', function(){  });

        $('#wizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            enableURLhash: false,
            autoAdjustHeight: false,
            transition: {
                animation: 'fade',
            },
            anchorSettings: {
                anchorClickable: false,
                enableAllAnchors: false,
                markDoneStep: true,
                markAllPreviousStepsAsDone: false,
                removeDoneStepOnNavigateBack: true,
                enableAnchorOnDoneStep: true
            },
            toolbarSettings: {
                toolbarExtraButtons: [btnFinish]
            },
            keyboardSettings: {
                keyNavigation: false,
            },
            lang: {
                next: "@lang('auth.register.next')",
                previous: "@lang('auth.register.previous')"
            },
        });

        //The code for the final step
        $('#wizard').on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
            if(anchorObject.prevObject.length - 1 == nextStepIndex) {
                $('.sw-btn-group-extra').removeClass('d-none');
            } else {
                $('.sw-btn-group-extra').addClass('d-none');
            }
        });

        $('#wizard').validate({
            rules: {
                firstname: {
                    required: true,
                    minlength: 2
                },
                lastname: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    minlength: 8,
                    maxlength: 15
                },
                email: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                password_confirmation: {
                    required: true,
                    equalTo: '[name="password"]'
                },
                address1: {
                    required: true
                },
                postcode: {
                    required: true
                },
                city: {
                    required: true
                },
                country: {
                    required: true
                }
            }
        });

        $('#wizard').on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
            var elmForm = $(".form-step-" + currentStepIndex);
            if (stepDirection === 'forward' && elmForm) {
                if ($('#wizard').valid()) {
                    return true
                } else {
                    return false
                }
            }
            return true;
        })
    });

</script>

@if(Route::has('login'))
<div class="text-center text-muted mt-3">
    @lang('auth.register.logintext') <a href="{{ route('login') }}" tabindex="-1">@lang('auth.register.loginlink')</a>
</div>
@endif

@endsection
