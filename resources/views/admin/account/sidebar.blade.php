<div class="d-none d-lg-block col-lg-3">
    <ul class="nav nav-pills nav-vertical">
        <li class="nav-item">
            <a href="{{ route('account.security') }}" class="nav-link {{ (request()->is('account/security*')) ? 'active' : '' }}">
                @lang('admin.account.security.title')
            </a>
            <ul class="nav nav-pills" id="security-submenu">
                <li class="nav-item">
                    <a href="{{ route('account.security') }}#2fa" class="nav-link">
                        @lang('admin.account.security.2fa.title')
                        @if(!auth()->user()->two_factor_secret)
                            <span class="badge bg-danger ms-auto" id="statusLabel2FA">@lang('admin.account.inactive')</span>
                        @else
                            <span class="badge bg-success ms-auto" id="statusLabel2FA">@lang('admin.account.active')</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.security') }}#password" class="nav-link">
                        @lang('admin.account.security.password.title')
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.security') }}#sessions" class="nav-link">
                        @lang('admin.account.security.session.title')
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('account.address') }}" class="nav-link {{ (request()->is('account/address*')) ? 'active' : '' }}">
                @lang('admin.account.address.title')
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('account.preferences') }}" class="nav-link {{ (request()->is('account/preferences*')) ? 'active' : '' }}">
                @lang('admin.account.preferences.title')
            </a>
        </li>
    </ul>
</div>
