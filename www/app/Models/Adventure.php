<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $fillable = ['name', 'description'];
    use HasFactory;

    public function slides()
    {
        return $this->hasMany(Slide::class)->orderBy('order');
    }

}
