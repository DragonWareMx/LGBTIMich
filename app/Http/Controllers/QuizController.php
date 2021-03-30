<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index($nombre){
        $encuesta = Quiz::where('name',$nombre)->firstOrFail();

        return view('encuesta', ['encuesta' => $encuesta]);
    }

    public function store($nombre){
        //-------------------------------------TEST-------------------------------------

        //dd(request());

        //-------------------------------------TEST-------------------------------------
        $data = request()->validate([
            'input' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        try{
                            //se busca la pregunta
                            $question = Question::find($id);

                            $option = Option::find(array_keys($value[$id])[0]);
                        }
                        catch(Throwable $e){
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> ocurrió un error al buscar en la db
                        }

                        //valida que la pregunta exista
                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no existe
                        
                        //valida que la opcion exista
                        if(!$option)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no existe

                        //valida la relacion entre la pregunta y la opcion
                        if(!($question->options->first() && $question->options->first()->id == $option->id))
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no esta relacionada con la pregunta

                            
                        //valida que la pregunta sea abierta
                        if($question->tipo != 'abierta')
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no es abierta
                            
                        //en caso que la pregunta sea required se valida
                        if($question->required){
                            if(!$value[$id][$option->id])
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta es required y llegó nula
                        }

                        //si la pregunta es de tipo numérica se valida su longitud y si es numerica la respuesta
                        if($option->tipo == 'num'){
                            if(!($value[$id][$option->id] && is_numeric($value[$id][$option->id])))
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no es numerica cuado deberia serlo
                            
                            //si tiene minimos o maximos se verifican
                            if($option->minimo && $value[$id][$option->id] && $value[$id][$option->id] < $option->minimo)
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no es numerica cuado deberia serlo
                            if($option->maximo && $value[$id][$option->id] && $value[$id][$option->id] > $option->maximo)
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no es numerica cuado deberia serlo
                        }
                        else{
                            //la pregunta es alfanumérica
                            if (!($value[$id][$option->id] && preg_match("/^[\w\-0-9áéíóúÁÉÍÓÚ().,;: \"'ñÑ]*$/", $value[$id][$option->id])))
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no es numerica cuado deberia serlo
                            
                            //si tiene minimos o maximos se verifican
                            if($option->minimo && $value[$id][$option->id] && strlen($value[$id][$option->id]) < $option->minimo)
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no es numerica cuado deberia serlo
                            if($option->maximo && $value[$id][$option->id] && strlen($value[$id][$option->id]) > $option->maximo)
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta no es numerica cuado deberia serlo
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
                        try{
                            //se busca la pregunta
                            $question = Question::find($id);

                            $option = Option::find($value[$id]);
                        }
                        catch(Throwable $e){
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> ocurrió un error al buscar en la db
                        }

                        //valida que la pregunta exista
                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no existe
                        
                        //valida que la opcion exista
                        if(!$option)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no existe

                        //valida la relacion entre la pregunta y la opcion
                        if(!($question->options->first() && $question->options->first()->id == $option->id))
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no esta relacionada con la pregunta

                            
                        //valida que la pregunta sea abierta
                        if($question->tipo != 'multiple')
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no es abierta
                            
                        //en caso que la pregunta sea required se valida
                        if($question->required){
                            if(!$value[$id])
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta es required y llegó nula
                        }
                    }
                }
            ],
            'select' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        try{
                            //se busca la pregunta
                            $question = Question::find($id);

                            $option = Option::find($value[$id]);
                        }
                        catch(Throwable $e){
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> ocurrió un error al buscar en la db
                        }

                        //valida que la pregunta exista
                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no existe
                        
                        //valida que la opcion exista
                        if(!$option)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no existe

                        //valida la relacion entre la pregunta y la opcion
                        if(!($question->options->first() && $question->options->first()->id == $option->id))
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no esta relacionada con la pregunta

                            
                        //valida que la pregunta sea abierta
                        if($question->tipo != 'select')
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no es abierta
                            
                        //en caso que la pregunta sea required se valida
                        if($question->required){
                            if(!$value[$id])
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta es required y llegó nula
                        }
                    }
                }
            ],
            'table' => [
                'array',
                function($attribute, $value, $fail) {
                    // index arr
                    $ids = array_keys($value);

                    foreach ($ids as $id) {
                        try{
                            //se busca la pregunta
                            $question = Question::find($id);

                            $options = Option::whereIn('id',array_keys($value[$id]))->get();

                            $optionCols = OptionCol::Where('question_id',$question->id);
                        }
                        catch(Throwable $e){
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> ocurrió un error al buscar en la db
                        }

                        //valida que la cantidad de opciones encontradas sean las mismas que las enviadas
                        if(count($options) == array_keys($value[$id]))
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> ocurrió un error al buscar en la db
                        
                        //obtenemos todos los ids de las option cols
                        foreach ($options as $option) {
                            dd(($value[$id]));
                            //$optionCols = OptionCol::
                            dd(($value[$id]));
                        }

                        //buscamos los option cols

                        //valida que los ids ingresados formen parte de los option cols

                        //valida que los option cols sean parte de la pregunta

                        //valida que la pregunta exista
                        if(!$question)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no existe
                        
                        //valida que la opcion exista
                        if(!$option)
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no existe

                        //valida la relacion entre la pregunta y la opcion
                        if(!($question->options->first() && $question->options->first()->id == $option->id))
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la opcion no esta relacionada con la pregunta

                            
                        //valida que la pregunta sea abierta
                        if($question->tipo != 'tabla')
                            return $fail('Ha ocurrido un error, vuelva a intentarlo más tarde.');  // -> la pregunta no es abierta
                            
                        //en caso que la pregunta sea required se valida
                        if($question->required){
                            if(!$value[$id][$option->id])
                                return $fail('Algo salió mal, vuelva a intentarlo.');  // -> la pregunta es required y llegó nula
                        }
                    }
                }
            ],
        ]);

        //-------------------------------------TEST-------------------------------------

        // dd('si sirve');

        //-------------------------------------TEST-------------------------------------
        DB::beginTransaction();
        try{
            //se registran todas las preguntas de tipo input
            if($data['input']){
                $cont=0;

                foreach($data['input'] as $input){
                    $answer = new Answer();
                    $answer->question_id=array_keys($data['input'])[$cont];  // Es una forma que se me ocurrió de obtener el valor izquierdo del arreglo de los inputs por eso está la variable cont para saber la posición del data[input] en el que van en el foreach
                    $answer->answerer_id=1;  ////////////////////////////////////////////////CAMBIAR ANSWERER ID////////////////////////////////////////////////////////
                    $option = Option::find(array_keys($input)[0]);
                    $answer->option_id=$option->id;
                    $answer->respuesta=$input[$option->id];

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
            DB::commit();
            return response()->json(200);
        }
        catch(\Exception $ex){
            DB::rollBack();
            return response()->json(['errors' => ['catch' => [0 => 'Ocurrió un error inesperado, intentalo más tarde.']]], 500);
        }
        dd('éxito master');
        $encuesta = Quiz::where('name',$nombre)->firstOrFail();
        return view('encuesta', ['encuesta' => $encuesta]);
    }
}
