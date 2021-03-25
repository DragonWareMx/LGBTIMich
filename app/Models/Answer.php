<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function optionCol()
    {
        return $this->belongsTo(OptionCol::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answerer()
    {
        return $this->belongsTo(answerer::class);
    }

}
