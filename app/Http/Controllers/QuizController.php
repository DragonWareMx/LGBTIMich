<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index($nombre){
        $encuesta = Quiz::where('name',$nombre)->firstOrFail();

        return view('encuesta', ['encuesta' => $encuesta]);
    }
}
