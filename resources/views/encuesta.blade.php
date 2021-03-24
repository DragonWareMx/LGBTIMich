<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta</title>
    <link rel="stylesheet" href="{{ asset('/css/encuesta.css') }}" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body class="uk-flex uk-flex-center">
    <div class="uk-container-xlarge">
        <div class="enc_title uk-width-1 uk-text-center uk-margin-large-top">Encuesta LGBTI Michoacán</div>
        <div class="uk-text-secondary uk-margin-top uk-width-1 uk-text-justify"style="font-family: Montserrat;font-style: normal;">El presente instrumento tiene el objetivo de…. . Por ello, es necesario que tus respuestas sean honestas y que respondas 
            a todo el cuestionario para poder obtener la mayor información posible. </div>
        <div class="uk-width-1 uk-margin-top">
            <div class="uk-width-1 uk-text-right uk-text-small uk-text-secondary">Avance total 5%</div>
            <div class="uk-width-expand enc_progressBar uk-margin-small-top">
                <div class="enc_progress" style="width:5%"></div>
            </div>
        </div>
        <ul class="uk-breadcrumb uk-margin-large-top uk-text-muted">
            <li class="uk-text-secondary">A. Datos Sociodemográficos</li>
            <li>B. Orientación Sexual e Identidad de Género</li>
            <li>C. Experiencias de Discriminación Laborales</li>
            <li>D. Experiencias de Discriminación en el Hogar</li>
            <li>Experiencias de Discriminación en Instituciones Públicas</li>
            <li>Experiencias de Discriminación en el Ámbito Escolar</li>
        </ul>
        <form action="" class="uk-width-1" method="POST">
            @csrf
            <div class="enc_encuesta">
                {{-- Pregunta tipo select --}}
                <div class="uk-width-1-3@m uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                    <div class="uk-width-1 uk-text-secondary uk-text-bold">1. Edad</div>
                    <select name="select1" class="uk-select uk-margin-small-top">
                        <option value="18">18 años</option>
                        <option value="19">19 años</option>
                    </select>
                </div>
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
                {{-- Pregunta tipo radio --}}
                <div class="uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                    <div class="uk-width-1 uk-text-secondary uk-text-bold">8. ¿Por qué no buscaste acompañamiento? Elige solo una respuesta</div>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio1">No hay acompañamiento especializado en el lugar donde vivo</label>
                        <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio1">No sabía dónde acudir</label>
                        <label class="uk-width-1"><input class="uk-radio" type="radio" name="radio1">No tenía dinero</label>
                    </div>
                </div>
                {{-- Pregunta tipo tabla --}}
                <div class="uk-width-1 uk-margin-small-bottom uk-margin-small-top">
                    <div class="uk-width-1 uk-text-secondary uk-text-bold">9. ¿A quien acudió y cual fue el resultado?</div>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-small uk-table-divider uk-table-middle">
                            <thead>
                                <tr>
                                    <th class="uk-width-small"></th>
                                    <th class="uk-width-small">Fue informativo y útil</th>
                                    <th class="uk-width-small">No podía ofrecerme todo lo que necesitaba</th>
                                    <th class="uk-width-small">Quería ayudar pero yo no di mi consentimiento para el tratamiento propuesto</th>
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
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                </tr>
                                <tr>
                                    <td>Organizaciones de la sociedad civil</td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                    <td><input class="uk-radio" type="radio" name="tableId1"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="uk-width-1 uk-margin-small-top uk-flex uk-flex-right">
                <button type="submit" class="enc_submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>