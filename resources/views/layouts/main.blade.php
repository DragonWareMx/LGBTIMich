<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" />

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container navbar-desk" uk-navbar style="position: relative; z-index: 980;">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#">
                    <img src="{{ asset('/img/logos/lgbtiMICH.png') }}" alt="" width="175px">
                </a>
                <a class="uk-navbar-item uk-logo uk-margin-left" href="#">
                    <img src="{{ asset('/img/logos/Michoacan.png') }}" alt="" width="85px">
                </a>
                <a class="uk-navbar-item uk-logo" href="#">
                    <img src="{{ asset('/img/logos/Michoacan_se_escucha.png') }}" alt="" width="118px">
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a href="#">Sobre el proyecto</a></li>
                    <li><a href="#">Encuesta</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div style="height: 30px;width:30px;background-color:green">

    </div>
    <footer class="main-footer uk-grid-colapse uk-grid-match uk-child-width-expand@m uk-text-center uk-flex-wrap"
        uk-grid>
        <div>
            <div class="uk-padding-small uk-flex uk-flex-left@m uk-flex-center uk-flex-wrap uk-flex-top">
                <a class="" href="/inicio" style="height: 70px">
                    <img src="{{ asset('img/logos/lgbtiMICH-white.png') }}" width="149px">
                </a>
                <div class="texto-footer uk-margin-small-top uk-flex uk-flex-left@m uk-flex-center uk-flex-middle"
                    style="width: 100%;height:25px">Copyright © 2021
                    LGBTIMichoacán</div>
                <a href="http://www.dragonware.com.mx" target="_blank"
                    class="texto-footer uk-flex uk-flex-left@m uk-flex-center uk-flex-middle uk-margin-small-top"
                    style="text-decoration: none; color:#FFFFFF; width:100%; height:25px">
                    <div class="texto-dragonware uk-flex uk-flex-middle">
                        Desarrollado por DragonWare.
                    </div>
                </a>
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-center uk-flex-wrap">
                <div class="uk-width-3-5 uk-flex-between uk-flex">
                    <a href="https://twitter.com/ZEscenica?s=09" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="https://www.facebook.com/zinnia.comp.escenica/" target="_blank"><i
                            class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/zinniacompania/" target="_blank"><i
                            class="fa fa-instagram fa-2x"></i></a>
                    <a href="mailto:zinnia.escenica@gmail.com"><i class="fa fa-envelope fa-2x"></i></a>
                </div>
                <div class="texto-center uk-margin-small-top">Mujeres y madres en la escena Michoacana.</div>
                <div class="texto-center  uk-margin-small-top">Copyright © 2021 Zinnia.</div>
            </div>
        </div>
        <div>
            logo
        </div>
        <div>
            logo
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-middle uk-flex-right@m uk-flex-center uk-flex-wrap">
                <div class="texto-center uk-margin-small-top"
                    style="font-size: 16px;font-style: italic; color: #D2D2D2">
                    "Esta página
                    web es apoyada
                    por
                    el Sistema de Apoyos
                    a la Creación y Proyectos Culturales (Fonca)"</div>
            </div>
        </div>
    </footer>
</body>

</html>