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

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    /**
     * Check if User Exist.
     *
     * @param string
     * @return boolean
     */
    public static function checkAlreadyRegistered($email)
    {
        $count = User::where('email', $email)->count();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Check if User Exist.
     *
     * @param string name
     * @param string email
     * @param string password(bcrypted)
     * @param string csrfToken
     * @return void
     */
    public static function register($name, $email, $password, $csrfToken)
    {
        User::insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'remember_token' => $csrfToken,
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Get User with Email.
     *
     * @param string email
     * @return User
     */
    public static function getUserWithEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
