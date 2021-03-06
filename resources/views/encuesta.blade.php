@extends('layouts.main')

@section('head')
<title>Encuesta</title>
<link rel="stylesheet" href="{{ asset('/css/encuesta.css') }}" />
@endsection

@section('content')
<div class="uk-container uk-container-xlarge">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="enc_title uk-width-1 uk-text-center uk-margin-large-top">Encuesta {{ $encuesta->name }}</div>
    <div class="uk-text-secondary uk-margin-top uk-width-1 uk-text-justify"
        style="font-family: Montserrat;font-style: normal;">El presente instrumento tiene el objetivo de…. . Por
        ello, es necesario que tus respuestas sean honestas y que respondas
        a todo el cuestionario para poder obtener la mayor información posible. </div>
    <div class="uk-width-1 uk-margin-top">
        <div class="uk-width-1 uk-text-right uk-text-small uk-text-secondary">Avance total 5%</div>
        <div class="uk-width-expand enc_progressBar uk-margin-small-top">
            <div class="enc_progress" style="width:5%"></div>
        </div>
    </div>
    <ul class="uk-breadcrumb uk-margin-large-top uk-text-muted">
        @php
        $alfabeto = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $contador = 0;
        @endphp

        @foreach ($encuesta->sections as $section)
        @if (isset($alfabeto[$contador]))
        <li class="uk-text-secondary">{{$alfabeto[$contador]}}. {{$section->name}}</li>
        @else
        <li>{{$contador-24}}. {{$section->name}}</li>
        @endif

        @php
        $contador++;
        @endphp
        @endforeach
    </ul>

    @php
        $contador = 1;
    @endphp

    <form action="{{route('guardarEncuesta',['nombre'=>$encuesta->name]) }}" class="uk-width-1" method="POST">
        @csrf
        <div class="enc_encuesta">
            @foreach ($encuesta->sections[0]->questions as $question)
            @switch($question->tipo)

            @case('abierta')
                {{-- Pregunta tipo select --}}
                <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                    <div class="uk-width-1 uk-text-secondary uk-text-bold">{{$contador}}. {{$question->pregunta}} @if (!$question->required)
                        (opcional)
                    @endif</div>
                    <input name="input[{{$question->id}}]" class="uk-input uk-margin-small-top" 
                    @if ($question->required)
                        required
                    @endif
                    @if ($question->options[0]->tipo == 'num')
                        type="number"

                        @if ($question->options[0]->maximo)
                            max="{{$question->options[0]->maximo}}"
                        @endif

                        @if ($question->options[0]->minimo)
                            min="{{$question->options[0]->minimo}}"
                        @endif

                    @elseif($question->options[0]->tipo == 'alfa')
                        type="text"
                        
                        @if ($question->options[0]->maximo)
                            maxlength="{{$question->options[0]->maximo}}"
                        @endif

                        @if ($question->options[0]->minimo)
                            minlength="{{$question->options[0]->minimo}}"
                        @endif
                    @endif>
                </div>
            @break

            @case('multiple')
            {{-- Pregunta tipo radio --}}
            <div class="uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">{{$contador}}. {{$question->pregunta}} @if (!$question->required)
                    (opcional)
                @else
                    Elige solo una respuesta
                @endif</div>
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    @foreach ($question->options as $option)
                        <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio[{{$question->id}}]" value="{{$option->id}}"
                            @if ($question->required)
                                required
                            @endif
                            >{{$option->opcion}}</label>
                    @endforeach
                </div>
            </div>
            @break

            @case('select')
            {{-- Pregunta tipo select --}}
            <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">{{$contador}}. {{$question->pregunta}} @if (!$question->required)
                    (opcional)
                @endif</div>
                <select name="select[{{$question->id}}]" class="uk-select uk-margin-small-top"
                @if ($question->required)
                    required
                @endif>
                    <option value="" selected disabled hidden > Seleccionar </option>
                    @foreach ($question->options as $option)
                        <option value="{{$option->id}}">{{$option->opcion}}</option>  
                    @endforeach
                </select>
            </div>
            @break

            @case('tabla')
            {{-- Pregunta tipo tabla --}}
            <div class="uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">{{$contador}}. {{$question->pregunta}} @if (!$question->required)
                    (opcional)
                @endif</div>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-small uk-table-divider uk-table-middle">
                        <thead>
                            <tr>
                                <th class="uk-width-small"></th>
                                @foreach ($question->optionCols as $optionCol)
                                <th class="uk-width-small">{{$optionCol->opcion}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($question->options as $option)
                            <tr>
                                <td>{{$option->opcion}}</td>
                                @foreach ($question->optionCols as $optionCol)
                                <td><input class="uk-radio" type="radio" name="table[{{$question->id}}][{{$option->id}}]" value="{{$optionCol->id}}"
                                    @if ($question->required)
                                        required
                                    @endif>
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @break

            @default

            @endswitch
            @php
                $contador++;
            @endphp
            @endforeach
        <div class="uk-width-1 uk-margin-small-top uk-flex uk-flex-right uk-margin-bottom">
            <button type="submit" class="enc_submit">Guardar</button>
        </div>
    </form>
</div>
@endsection