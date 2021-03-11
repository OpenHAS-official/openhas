<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['nullable', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state_region' => ['nullable', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'phone:AUTO'],
            'company' => ['nullable', 'string', 'max:255'],
            'metadata' => ['nullable'],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'company' => $input['company'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'address1' => $input['address1'],
                'address2' => $input['address2'],
                'postcode' => $input['postcode'],
                'city' => $input['city'],
                'state_region' => $input['state_region'],
                'country' => $input['country'],
                'phone' => $input['phone'],
                'metadata' => $input['metadata'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'company' => $input['company'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'address1' => $input['address1'],
            'address2' => $input['address2'],
            'postcode' => $input['postcode'],
            'city' => $input['city'],
            'state_region' => $input['state_region'],
            'country' => $input['country'],
            'phone' => $input['phone'],
            'metadata' => $input['metadata'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
