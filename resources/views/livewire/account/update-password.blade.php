<form wire:submit.prevent="save">
    <div class="modal-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        {{-- {{ dd(session()) }} --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="mb-3">
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password" class="form-control" wire:model.defer="state.current_password">
        </div>
        <div class="mb-3">
            <label for="password">New Password</label>
            <input type="password" name="password" id="password" class="form-control" wire:model.defer="state.password">
        </div>
        <div class="">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" wire:model.defer="state.password_confirmation">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary text-white d-flex align-items-center">
            <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true" wire:loading></span>
            Save changes
        </button>
    </div>
</form>
