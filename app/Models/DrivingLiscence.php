<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingLiscence extends Model
{
    use HasFactory;
    protected $fillable=['user_id','issue_by','liscence_number','first_name','dob','last_name','other_name','image'];
}
