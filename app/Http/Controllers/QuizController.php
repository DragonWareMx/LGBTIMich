<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    public function index($nombre){
        $encuesta = Quiz::where('name',$nombre)->firstOrFail();

        return view('encuesta', ['encuesta' => $encuesta]);
    }

    public function store($nombre){
        $data = request()->validate([
            'input' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        $question = Question::find($id);

                        //valida que la pregunta exista
                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no existe
                        
                        //en caso que la pregunta sea required se valida
                        if($question->required){
                            if(!$value[$id])
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no existe
                        }
                    }
                }
            ],
            'radio' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        $question = Question::find($id);

                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> "quantity is invalid"
                    }
                }
            ],
            'select' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        $question = Question::find($id);

                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> "quantity is invalid"
                    }
                }
            ],
            'table' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        $question = Question::find($id);

                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> "quantity is invalid"
                    }
                }
            ],
        ]);

        dd(request());

        $encuesta = Quiz::where('name',$nombre)->firstOrFail();

        return view('encuesta', ['encuesta' => $encuesta]);
    }
}
