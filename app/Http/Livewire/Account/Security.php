<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class Security extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.account.security');
    }
}
