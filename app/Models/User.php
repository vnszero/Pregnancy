<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Role alternatives
     *
     * @const string
     */
    public const ROLE_VISITOR = 'visitor';
    public const ROLE_CUSTOMER = 'customer';
    public const ROLE_STAFF = 'staff';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<string, string>
     */
    protected $attributes = [
        'role' => self::ROLE_VISITOR,
    ];

    public function personalDetails()
    {
        return $this->hasOne(PersonalDetails::class);
    }

    public function pregnancies()
    {
        return $this->hasMany(Pregnancy::class);
    }
}
