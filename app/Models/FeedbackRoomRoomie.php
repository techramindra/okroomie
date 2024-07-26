<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackRoomRoomie extends Model
{ 
    use HasFactory;
    // protected $table="feedback_room_roomies";
    protected $fillable=[
        'user_id',
        'room_roomie_id',
        'reason',
        'question',
        'answer',
        'room_roomie',
    ];
}
