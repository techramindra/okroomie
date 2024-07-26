<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_image extends Model
{
    use HasFactory;
    protected $fillable=[
        'find_me_a_rooms_users_id',
        'find_me_a_rooms_id',
        'image',
        'featured_image'
    ];
}
