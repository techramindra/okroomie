<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_group_detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'group_partner_name',
        'group_partner_age',
        'group_partner_gender',


    ];
}
