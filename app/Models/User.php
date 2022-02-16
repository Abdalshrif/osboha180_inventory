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

    protected $fillable = [
        'name',
        'email',
        'password',
        'number_of_team',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}



















// namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
// use Laratrust\Traits\LaratrustUserTrait;

// class User extends Authenticatable
// {
//     use LaratrustUserTrait;
//     use HasApiTokens;
//     use HasFactory;
//     use Notifiable;




//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//         'number_of_team',
//         'rol_id',

//     ];


//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];


//     protected $casts = [
//         'email_verified_at' => 'datetime',
//         'rol_id' => 'array',

//     ];
//}

