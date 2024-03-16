<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdventureProgress extends Model
{
    protected $fillable = ['user_id', 'adventure_id', 'prompt_id', 'unlock_time'];
    public $timestamps = false;
    use HasFactory;
}
    
    
