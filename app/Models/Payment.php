<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'users_id',
        'plan_id',
        'user_type',
        'plan',
        'amount',
        'day',
        'starts',
        'ends',
        'ends_strtotime',
        'starts_strtotime',
        'payment_stripe_id',
        'balance_transaction',
        'receipt_url',
        'pause_time',
        'resume_time',
        'pause_resume_status',
       
    ];
}
