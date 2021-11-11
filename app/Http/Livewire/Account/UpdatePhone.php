<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class UpdatePhone extends Component
{
    public User $user;

    protected $rules = [
        'user.phone' => 'nullable|string|max:255',
    ];

    public function render()
    {
        return view('livewire.account.update-phone');
    }

    public function save()
    {
        $this->validate();
        $this->user->save();
        session()->flash('message', 'Your phone number has been updated successfully.');
    }
}
