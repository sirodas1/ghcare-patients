<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id';
    protected $table = 'patients';

    protected $fillable = [
        'firstname',
        'lastname',
        'othernames',
        'email',
        'phone_number',
        'national_card_id',
        'profile_pic',
        'age',
        'gender',
        'occupation',
        'region',
        'district',
        'town',
        'landmark',
        'residential_address',
        'next_of_kin',
        'nok_phone_number',
    ];

}
