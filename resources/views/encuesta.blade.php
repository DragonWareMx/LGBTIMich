@extends('layouts.main')

@section('head')
<title>Encuesta</title>
<link rel="stylesheet" href="{{ asset('/css/encuesta.css') }}" />
@endsection

@section('content')
<div class="uk-container uk-container-xlarge">
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
    <form action="" class="uk-width-1" method="POST">
        @csrf
        <div class="enc_encuesta">
            @foreach ($encuesta->sections[0]->questions as $question)
            @switch($question->tipo)
            @case('abierta')
            {{-- Pregunta tipo select --}}
            <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">1. Edad</div>
                <input name="input1" class="uk-input uk-margin-small-top">
            </div>
            @break
            @case('multiple')
            {{-- Pregunta tipo radio --}}
            <div class="uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">8. ¿Por qué no buscaste acompañamiento? Elige
                    solo una respuesta</div>
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio1">No hay
                        acompañamiento especializado en el lugar donde vivo</label>
                    <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio1">No sabía dónde
                        acudir</label>
                    <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio1">No tenía
                        dinero</label>
                </div>
            </div>
            @break
            @case('select')
            {{-- Pregunta tipo select --}}
            <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">1. Edad</div>
                <select name="select1" class="uk-select uk-margin-small-top">
                    <option value="18">18 años</option>
                    <option value="19">19 años</option>
                </select>
            </div>
            @break
            @case('tabla')
            {{-- Pregunta tipo tabla --}}
            <div class="uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">9. ¿A quien acudió y cual fue el resultado?
                </div>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-small uk-table-divider uk-table-middle">
                        <thead>
                            <tr>
                                <th class="uk-width-small"></th>
                                <th class="uk-width-small">Fue informativo y útil</th>
                                <th class="uk-width-small">No podía ofrecerme todo lo que necesitaba</th>
                                <th class="uk-width-small">Quería ayudar pero yo no di mi consentimiento para el
                                    tratamiento propuesto</th>
                                <th class="uk-width-small">Se negó a ayudarme</th>
                                <th class="uk-width-small">Trató de convencerme de que no soy trans</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Organizaciones de la sociedad civil</td>
                                <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                <td><input class="uk-radio" type="radio" name="tableId1"></td>
                            </tr>
                            <tr>
                                <td>Organizaciones de la sociedad civil</td>
                                <td><input class="uk-radio" type="radio" name="tableId2"></td>
                                <td><input class="uk-radio" type="radio" name="tableId2"></td>
                                <td><input class="uk-radio" type="radio" name="tableId2"></td>
                                <td><input class="uk-radio" type="radio" name="tableId2"></td>
                                <td><input class="uk-radio" type="radio" name="tableId2"></td>
                            </tr>
                            <tr>
                                <td>Organizaciones de la sociedad civil</td>
                                <td><input class="uk-radio" type="radio" name="tableId3"></td>
                                <td><input class="uk-radio" type="radio" name="tableId3"></td>
                                <td><input class="uk-radio" type="radio" name="tableId3"></td>
                                <td><input class="uk-radio" type="radio" name="tableId3"></td>
                                <td><input class="uk-radio" type="radio" name="tableId3"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @break
            @default

            @endswitch
            @endforeach
            {{-- Pregunta tipo select --}}
            <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">2. Municipio de residencia actual</div>
                <select name="select2" class="uk-select uk-margin-small-top">
                    <option value="Morelia">Morelia</option>
                    <option value="Municiio">Municipio</option>
                </select>
            </div>
            {{-- Pregunta tipo select --}}
            <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                <div class="uk-width-1 uk-text-secondary uk-text-bold">3. Sexo asignado al nacer</div>
                <select name="select3" class="uk-select uk-margin-small-top">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
        </div>
        <div class="uk-width-1 uk-margin-small-top uk-flex uk-flex-right">
            <button type="submit" class="enc_submit">Guardar</button>
        </div>
    </form>
</div>
@endsection