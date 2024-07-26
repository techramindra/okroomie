<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRoomieLike extends Model
{

    public function room_image()
    {
        return $this->hasMany(Room_image::class,'find_me_a_roomie_id','id');
    }

    use HasFactory;
    protected $table='room_roomie_likes';
    protected $fillable=['user_id','find_me_a_roomie_id','find_me_a_room_id','status'];
}
