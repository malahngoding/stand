<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;


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
        'auth_provider'
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
     * @param string email
     * @param string authProvider
     * @return boolean
     */
    public static function checkAlreadyRegistered($email, $authProvider)
    {
        $count = User::where('auth_provider', $authProvider)->where('email', $email)->count();
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
     * @param string authProvider
     * @return void
     */
    public static function register($name, $email, $password, $csrfToken, $authProvider)
    {
        $uuid = Str::uuid();
        User::insert([
            'uuid' => $uuid,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'remember_token' => $csrfToken,
            'auth_provider' => $authProvider,
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return $uuid;
    }

    /**
     * Get User with Email.
     *
     * @param string email
     * @return User
     */
    public static function getUserWithEmail($email)
    {
        return User::where('auth_provider', 'credentials')->where('email', $email)->first();
    }

    /**
     * Handshake UUID
     *
     * @param string email
     * @param string email
     * @return User
     */
    public static function getUserUUID($email, $authProvider)
    {
        return User::where('auth_provider', $authProvider)->where('email', $email)->first()->uuid;
    }

    public static function checkWhoExist($who)
    {
        $count = User::where('uuid', $who)->count();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }
}
