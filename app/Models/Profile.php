<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = ['id', 'user_id', 'phone_number', 'photo', 'date_of_birth', 'interest_area', 'bio',  'created_at', 'updated_at'];
}
