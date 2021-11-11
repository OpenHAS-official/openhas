<div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Name</strong>
                </div>
                <div class="item-data" wire:poll>
                    {{ $user->fullname }}
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#changeNameModal">
                    Change
                </button>
            </div>
        </div>
    </div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Email</strong>
                </div>
                <div class="item-data" wire:poll>
                    {{ $user->email }}
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#changeEmailModal">
                    Change
                </button>
            </div>
        </div>
    </div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Phone</strong>
                </div>
                <div class="item-data" wire:poll.keep-alive>
                    {{ ($user->phone) ?: 'Not set' }}
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#changePhoneModal">
                    Change
                </button>
            </div>
        </div>
    </div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Address</strong>
                </div>
                <div class="item-data" wire:poll.keep-alive>
                    {{ ($user->address) ?: 'Not set' }}
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#changeAddressModal">
                    Change
                </button>
            </div>
        </div>
    </div>
    <div class="item border-bottom py-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="item-label">
                    <strong>Company</strong>
                </div>
                <div class="item-data" wire:poll.keep-alive>
                    {{ ($user->company) ?: 'N/A'}}
                </div>
            </div>
            <div class="col text-end">
                <button class="btn-sm app-btn-secondary" data-bs-toggle="modal" data-bs-target="#changeCompanyModal">
                    Change
                </button>
            </div>
        </div>
    </div>
</div>
