<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class UpdateFullName extends Component
{
    public User $user;

    protected $rules = [
        'user.firstname' => 'required|string|max:255',
        'user.lastname' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.account.update-full-name');
    }

    public function save()
    {
        $this->validate();
        $this->user->save();
        session()->flash('message', 'Your name has been updated successfully.');
    }
}
