<div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Password</strong>
                </div>
                <div class="item-data">
                    ••••••••
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                    Change
                </button>
            </div>
        </div>
    </div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Two-Factor Authentication</strong>
                </div>
                <div class="item-data" wire:poll>
                    @if ($user->two_factor_recovery_codes)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#updateTwoFactorAuthenticationModal">
                    Manage
                </button>
            </div>
        </div>
    </div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Last Login</strong>
                </div>
                <div class="item-data">
                    Not available
                </div>
            </div>
            <div class="col text-end">
                <a class="btn-sm app-btn-secondary disabled" href="#">
                    Change
                </a>
            </div>
        </div>
    </div>
</div>
