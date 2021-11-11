<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateEmail extends Component
{
    public User $user;
    public $currentEmail;

    protected $rules = [
        'user.email' => 'required|string|max:255|email',
    ];

    public function mount()
    {
        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.account.update-email');
    }

    public function save()
    {
        $this->validate();
        $this->validate([
            'user.email' => 'unique:users,email,' . $this->user->id,
        ]);
        if ($this->user->isDirty('email') &&
            $this->user instanceof MustVerifyEmail) {
                $this->user->email_verified_at = null;
                $this->user->save();
                $this->user->sendEmailVerificationNotification();
                session()->flash('message', 'Your email address has been updated successfully.');
        } else {
            $this->user->save();
            session()->flash('message', 'The email address has been successfully saved. However, your email address is unchanged or does not need to be confirmed.');
        }
    }
}
