<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Find_me_a_roomie extends Model
{
    public function room_image()
    {
        return $this->hasMany(Room_image::class,'find_me_a_roomies_id','id');
    }
    
    use HasFactory;
    protected $fillable=[
        'find_me_a_roomies_users_id',
        'find_me_a_roomies_id',
        'accomodation_type',
        'house_flate',
        'about_yourself',
        'listing_title',
    ];
}
