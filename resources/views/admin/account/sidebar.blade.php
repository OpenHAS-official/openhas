<div class="d-none d-lg-block col-lg-3">
    <ul class="nav nav-pills nav-vertical">
        <li class="nav-item">
            <a href="{{ route('account.index') }}" class="nav-link {{ (request()->is('account')) ? 'active' : '' }}">
                @lang('admin.account.index.title')
            </a>
            <ul class="nav nav-pills" id="security-submenu">
                <li class="nav-item">
                    <a href="{{ route('account.index') }}#name" class="nav-link">
                        @lang('admin.account.index.name.title')
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.index') }}#email" class="nav-link">
                        @lang('admin.account.index.email.title')
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.index') }}#company" class="nav-link">
                        @lang('admin.account.index.company.title')
                    </a>
                </li>
            </ul>
        </li>
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
                        @lang('admin.account.security.sessions.title')
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
            <ul class="nav nav-pills" id="preferences-submenu">
                <li class="nav-item">
                    <a href="{{ route('account.preferences') }}#theme" class="nav-link">
                        @lang('admin.account.preferences.theme.title')
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.preferences') }}#language" class="nav-link">
                        @lang('admin.account.preferences.language.title')
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
