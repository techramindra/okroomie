<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_image extends Model
{
    public function find_me_a_roomie()
    {
        $this->belongsTo(find_me_a_roomie::class,'id','find_me_a_roomies_id');
    }
    use HasFactory;
    protected $fillable=[
        'find_me_a_roomies_users_id',
        'find_me_a_roomies_id',
        'image',
    ];
}
