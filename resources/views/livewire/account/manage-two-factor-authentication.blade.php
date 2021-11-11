<div>
    <div class="modal-header">
        <h5 class="modal-title">Two Factor Authentication</h5>
    </div>
    <div class="modal-body">
        @if ($user->two_factor_secret)
            @if (!$showQrCode && !$showRecoveryCodes)
                <p>
                    Two Factor Authentication is activated for your account, you are now using an extra
                    layer of security around your account. Thank you for securing your account.
                </p>
            @endif
            @if ($showQrCode)
                <div class="mb-4">
                    <p>
                        Two factor authentication is now enabled. Scan the following QR code using your
                        phone's authenticator application.
                    </p>
                    <div class="mb-3">
                        {!! $user->twoFactorQrCodeSvg() !!}
                    </div>
                </div>
            @endif

            @if ($showRecoveryCodes)
                <div class="mb-3">
                    <p>
                        Store these recovery codes in a secure password manager. They can be used to
                        recover access to your account if your two factor authentication device is lost.
                    </p>
                    <ul class="list-group">
                        @foreach (json_decode(decrypt($user->two_factor_recovery_codes), true) as $code)
                            <li class="list-group-item">{{ $code }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @else
            <div>
                <p>You have not enabled two factor authentication.</p>

                <button wire:click="enable" class="btn btn-primary text-white d-flex align-items-center">
                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true" wire:loading></span>
                    Enable Two-Factor Authentication
                </button>
            </div>
        @endif
    </div>
    @if ($user->two_factor_secret)
        <div class="modal-footer">
            <div class="text-center" wire:loading>
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div wire:loading.remove>
                @if ($showRecoveryCodes)
                    <button wire:click="regenerate" class="btn btn-secondary">
                        Regenerate Recovery Codes
                    </button>
                @else
                    <button wire:click="show" class="btn btn-secondary">
                        Show Recovery Codes
                    </button>
                @endif

                <button wire:click="disable" class="btn btn-danger text-white">
                    Disable Two-Factor Authentication
                </button>
            </div>
        </div>
    @endif
</div>
