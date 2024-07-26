<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineInspection extends Model
{
    use HasFactory;
    protected $fillable=['sender_id','receiver_id','message','find_me_a_roomies_id'];
}
