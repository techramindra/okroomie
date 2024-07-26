<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable=[
        'room_roomie',
        'title',
        'price',
        'days',
        'description',
        'listed_as_a_featured_property',
        'listing_included',
        'book_inspections',
        'thirty_days_guarantee',
        'video_tours',
        'video_profile',
        'receive_messages',
        'send_messages',
        'in_app_voice_and_video_call',
        'mobile_info',
        'appear_in_popular_searches',
    ];
}
