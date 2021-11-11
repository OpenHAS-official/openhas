<?php

namespace App\Http\Livewire\Account;

use App\Actions\Fortify\UpdateUserPassword;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rules\Password;

class UpdatePassword extends Component
{
    public User $user;
    public $state = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    // protected $rules = [
    //     'user.password' => 'required|string',
    // ];

    public function render()
    {
        return view('livewire.account.update-password');
    }
    public function save(UpdateUserPassword $updater)
    {
        $this->resetErrorBag();

        if ($updater->update($this->user, $this->state)) {
            $this->state = [
                'current_password' => '',
                'password' => '',
                'password_confirmation' => '',
            ];
            session()->flash('message', 'Your password has been updated succesfully.');
        }
    }
}
