<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function answerers()
    {
        return $this->belongsToMany(Answerer::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
