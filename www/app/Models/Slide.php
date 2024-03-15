<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'adventure_id', 'order'];

    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }
    
    public function prompts()
    {
        return $this->hasMany(Prompt::class);
    }
}
