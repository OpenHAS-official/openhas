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
            <label for="company">Company Name</label>
            <input type="text" name="company" id="company" class="form-control" wire:model.defer="user.company" wire:change="validateVAT()">
        </div>
        <div class="mb-3">
            <label for="company_vat">VAT ID</label>
            <input type="text" name="company_vat" id="company_vat" class="form-control {{ (session()->has('vatValidation') ? session('vatValidation') : '') }}" wire:model.lazy="user.company_vat" wire:change="validateVAT($event.target.value)">
            @if (session()->has('vatValidation'))
                @if (session('vatValidation') == 'is-invalid')
                    <div class="invalid-feedback">
                        We are sorry but the VAT number entered does not match the company name.
                        Please enter the company name as it appears in official documents or try again later.
                        Still can't work it out? Please contact us.
                    </div>
                @else
                    <div class="valid-feedback">
                        We have validated your VAT ID. From now on, we will no longer charge VAT on our services.
                    </div>
                @endif
            @endif
        </div>
        <div class="">
            <label for="company_registration">Company Registration Number</label>
            <input type="text" name="company_registration" id="company_registration" class="form-control" wire:model.defer="user.company_registration">
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
