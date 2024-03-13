<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptOption extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'is_correct', 'prompt_id', 'correct_answer_text', 'order'];
    public $timestamps = false;
}
