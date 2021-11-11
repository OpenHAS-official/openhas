<form wire:submit.prevent="save">
    <div class="modal-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <div class="mb-3">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" wire:model.defer="user.firstname">
        </div>
        <div class="">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" wire:model.defer="user.lastname">
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
