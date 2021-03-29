<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

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

        //se registran todas las preguntas de tipo input
        if($data['input']){
            $cont=0;

            foreach($data['input'] as $input){
                $answer = new Answer();

                $answer->respuesta=$input;  // Se guarda la respuesta, o sea el valor derecho del input
                $answer->question_id=array_keys($data['input'])[$cont];  // Es una forma que se me ocurrió de obtener el valor izquierdo del arreglo de los inputs por eso está la variable cont para saber la posición del data[input] en el que van en el foreach
                $answer->answerer_id=1;  ////////////////////////////////////////////////CAMBIAR ANSWERER ID////////////////////////////////////////////////////////

                $answer->save();
                $cont++;
            }
        }

        //se registran todas las preguntas de tipo radio
        if($data['radio']){
            $cont=0;
            foreach($data['radio'] as $radio){
                $answer= new Answer();

                $answer->option_id=$radio; //Se guarda la relación con la opción seleccionada
                $answer->question_id=array_keys($data['radio'])[$cont];
                $answer->answerer_id=1;  ////////////////////////////////////////////////CAMBIAR ANSWERER ID////////////////////////////////////////////////////////
                
                $answer->save();
                $cont++;
            }
        }

        //se registran todas las preguntas de tipo select
        if($data['select']){
            $cont=0;
            foreach($data['select'] as $select){
                $answer= new Answer();

                $answer->option_id=$select; //Se guarda la relación con la opción seleccionada
                $answer->question_id=array_keys($data['select'])[$cont];
                $answer->answerer_id=1;  ////////////////////////////////////////////////CAMBIAR ANSWERER ID////////////////////////////////////////////////////////
                
                $answer->save();
                $cont++;
            }
        }

        //se registran todas las preguntas de tipo table
        if($data['table']){
            $cont=0;
            foreach($data['table'] as $table){
                $aux=0;
                foreach($table as $option){
                    $answer= new Answer();

                    $answer->question_id=array_keys($data['table'])[$cont];
                    $answer->option_col_id=$option;
                    $answer->option_id=array_keys($table)[$aux];
                    $answer->answerer_id=1;  ////////////////////////////////////////////////CAMBIAR ANSWERER ID////////////////////////////////////////////////////////
                    
                    $aux++;
                    $answer->save();
                }
                $cont++;
            }
        }

        dd('éxito master');

        $encuesta = Quiz::where('name',$nombre)->firstOrFail();

        return view('encuesta', ['encuesta' => $encuesta]);
    }
}
