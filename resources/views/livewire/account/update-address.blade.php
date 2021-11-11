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
            <label for="address1">Address 1*</label>
            <input type="text" name="address1" id="address1" class="form-control" wire:model.defer="user.address1">
        </div>
        <div class="mb-3">
            <label for="address2">Address 2</label>
            <input type="text" name="address2" id="address2" class="form-control" wire:model.defer="user.address2">
        </div>
        <div class="mb-3">
            <label for="postcode">Postcode*</label>
            <input type="text" name="postcode" id="postcode" class="form-control" wire:model.defer="user.postcode">
        </div>
        <div class="mb-3">
            <label for="city">City*</label>
            <input type="text" name="city" id="city" class="form-control" wire:model.defer="user.city">
        </div>
        <div class="mb-3">
            <label for="region">Region</label>
            <input type="text" name="region" id="region" class="form-control" wire:model.defer="user.region">
        </div>
        <div class="">
            <label for="country">Country*</label>
            <select name="country" id="country" class="form-control" wire:model.defer="user.country">
                <x-country-select/>
            </select>
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
