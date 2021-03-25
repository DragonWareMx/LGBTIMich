<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answerer extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class);
    }
}
