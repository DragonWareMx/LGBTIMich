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

    public function store($nombre){
        dd(request());
        // $data = request()->validate([
        //     'seccion' => 'required|exists:sections,num_seccion',
        //     'nombre' => ['required', 'max:100', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'apellido_paterno' => ['required', 'max:100', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'apellido_materno' => ['nullable', 'max:100', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'correo_electronico' => 'nullable|max:320|email',
        //     'fecha_de_nacimiento' => 'required|date|before:today',
        //     'sexo' => ['required', Rule::in(['h', 'm']),],
        //     'trabajo' => 'required|exists:jobs,nombre',
        //     'telefono' => ['required_without:correo_electronico', 'regex:/^[0-9]{3}[ -]{0,1}[0-9]{3}[ -]{0,1}[0-9]{4}$/'],
        //     'estado_civil' => ['nullable', Rule::in(['soltero', 'casado', 'unionl', 'separado', 'divorciado', 'viudo']),],
        //     'clave_elector' => ['required', 'max:20', 'min:16', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'colonia' => ['required', 'max:100', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'calle' => ['nullable', 'max:100', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'num_exterior' => ['nullable', 'max:10', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'num_interior' => ['nullable', 'max:10', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'CP' => ['required', 'regex:/^[0-9]{5}$/'],
        //     'facebook' => ['nullable', 'max:50', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'twitter' => ['nullable', 'max:50', 'regex:/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+(?:[_&%$*#@!-][A-Za-z0-9ñÑáéíóúÁÉÍÓÚ. ]+)*$/'],
        //     'foto_anverso' => 'required|mimes:jpeg,jpg,png|image',
        //     'foto_inverso' => 'required|mimes:jpeg,jpg,png|image',
        //     'foto_de_elector' => 'nullable|mimes:jpeg,jpg,png|image',
        //     'foto_de_firma' => 'nullable|mimes:jpeg,jpg,png|image',
        // ]);

        

        $encuesta = Quiz::where('name',$nombre)->firstOrFail();

        return view('encuesta', ['encuesta' => $encuesta]);
    }
}
