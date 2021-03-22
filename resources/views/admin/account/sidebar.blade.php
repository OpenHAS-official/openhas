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
