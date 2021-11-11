<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Laravel\Fortify\Actions\GenerateNewRecoveryCodes;
use Livewire\Component;

class ManageTwoFactorAuthentication extends Component
{
    public User $user;
    public $showQrCode = false;
    public $showRecoveryCodes = false;

    public function render()
    {
        return view('livewire.account.manage-two-factor-authentication');
    }

    public function enable(EnableTwoFactorAuthentication $enable)
    {
        $enable($this->user);
        $this->showQrCode = true;
        $this->showRecoveryCodes = false;
    }

    public function show()
    {
        $this->showRecoveryCodes = true;
    }

    public function regenerate(GenerateNewRecoveryCodes $generate)
    {
        $generate($this->user);
        $this->showRecoveryCodes = true;
    }

    public function disable(DisableTwoFactorAuthentication $disable)
    {
        $disable($this->user);
    }
}
