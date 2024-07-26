<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageBlockUser extends Model
{
    use HasFactory;
    protected $table='message_block_users';
    protected $fillable=['blocked_to','blocked_by'];
}
