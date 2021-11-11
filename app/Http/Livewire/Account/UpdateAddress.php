<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class UpdateAddress extends Component
{
    public User $user;

    protected $rules = [
        'user.address1' => 'required|string|max:255',
        'user.address2' => 'nullable|string|max:255',
        'user.postcode' => 'required|string|max:255',
        'user.city' => 'required|string|max:255',
        'user.region' => 'nullable|string|max:255',
        'user.country' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.account.update-address');
    }

    public function save()
    {
        $this->validate();
        $this->user->save();
        session()->flash('message', 'Your address has been updated successfully.');
    }
}
