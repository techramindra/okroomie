<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan_inclusion extends Model
{
    use HasFactory;
    protected $fillable=[
        'room_roomie',
        'inclusion',
        'free',
        'basic',
        'full',
        'help',
    ];
}
