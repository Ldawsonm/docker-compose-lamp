<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResponse extends Model
{
    protected $fillable = ["user_id", "prompt_id", "prompt_option_id", "text"];
    use HasFactory;
}
