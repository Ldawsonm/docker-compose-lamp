<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'type', 'slide_id', 'order'];
    // Inside Prompt model
    public  function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }

    public function promptOptions()
    {
        return $this->hasMany(PromptOption::class);
    }
}
