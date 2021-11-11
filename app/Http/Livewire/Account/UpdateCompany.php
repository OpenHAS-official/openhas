<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UpdateCompany extends Component
{
    public User $user;

    protected $rules = [
        'user.company' => 'required|string|max:255',
        'user.company_vat' => 'nullable|string|max:255',
        'user.company_registration' => 'nullable|string|max:255',
    ];

    public function render()
    {
        return view('livewire.account.update-company');
    }

    public function validateVAT()
    {
        $response = Http::withOptions(['verify' => false])->get('https://controleerbtwnummer.eu/api/validate/'.$this->user->company_vat.'.json');
        if ($response['valid'] && mb_strtolower($response['name']) == mb_strtolower($this->user->company)) {
            $this->user->forceFill([
                'metadata->vat_exempt' => true,
            ])->save();
            session()->flash('vatValidation', 'is-valid');
        } else{
            $this->user->forceFill([
                'metadata->vat_exempt' => false,
            ])->save();
            session()->flash('vatValidation', 'is-invalid');
        }
    }

    public function save()
    {
        $this->validate();
        $this->user->save();
        session()->flash('message', 'Your company information has been updated successfully.');
    }
}
