<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class UpdateTwoFactorAuthentication extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.account.update-two-factor-authentication');
    }
}
