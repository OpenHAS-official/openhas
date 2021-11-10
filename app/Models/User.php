<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'address1',
        'address2',
        'postcode',
        'city',
        'region',
        'country',
        'phone',
        'company',
        'company_vat',
        'company_registration',
        'preferences',
        'active',
        'metadata',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'preferences' => 'array',
        'metadata' => 'array',
    ];

    /**
     * Return the full name
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "$this->firstname $this->lastname";
    }

    /**
     * Return the address
     *
     * @return string
     */
    public function getAddressAttribute()
    {
        if ($this->addressIsSet()) {
            if ($this->address2) {
                return "$this->address1 $this->address2, $this->postcode $this->city, $this->region, $this->country";
            }
            return "$this->address1, $this->postcode $this->city, $this->region, $this->country";
        }
        return null;
    }

    protected function addressIsSet()
    {
        if ($this->address1 && $this->postcode && $this->city && $this->country) {
            return true;
        }
        return false;
    }
}
