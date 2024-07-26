<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Find_me_a_room extends Model
{
    use HasFactory;
    protected $fillable=['user_id','suburb','about_yourself'];

   public function user_images()
    {
        return $this->hasMany(User_image::class,'find_me_a_rooms_id','id');
    }
}
