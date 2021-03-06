<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Propaganistas\LaravelPhone\Casts\E164PhoneNumberCast;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, TwoFactorAuthenticatable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'company',
        'email',
        'password',
        'address1',
        'address2',
        'postcode',
        'city',
        'state_region',
        'country',
        'phone',
        'metadata',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone' => E164PhoneNumberCast::class,
        'metadata' => 'array',
    ];

    /**
     * Return Full Name
     *
     * @return string
     */
    function fullname() {
        return "$this->firstname $this->lastname";
    }

    /**
     * Return Avatar URL from storage or from Avatar API
     *
     * @return string
     */
    function avatar() {
        if (isset($this->metadata['avatar'])) {
            return $this->metadata['avatar'];
        }
        $fullname = urlencode($this->fullname());
        return "https://api.proxeuse.com/avatars/api/?name=$fullname&background=24c178&color=fff";
    }
}
