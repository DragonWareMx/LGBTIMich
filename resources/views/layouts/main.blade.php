<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" />

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    @yield('head')
</head>

<body>
    <div class="menu-desktop"
        uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
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

    <div class="menu-phone"
        uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container navbar-phone" uk-navbar style="position: relative; z-index: 980;">
            <div class="uk-navbar-left">
                {{-- <a class="" href="#">
                    <img src="{{ asset('/img/icons/menu.png') }}" alt="" width="23px">
                </a> --}}
                <button class="" type="button"
                    style="background-color: transparent; border:none; outline:none;width:30px;height:30px">
                    <img src="{{ asset('/img/icons/menu.png') }}" alt="" width="23px">
                </button>
                <div uk-dropdown="mode:click">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="#">Sobre el proyecto</a></li>
                        <li><a href="#">Encuesta</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <a class="" href="#">
                    <img src="{{ asset('/img/logos/lgbtiMICH.png') }}" alt="" width="117px">
                </a>
            </div>
            <div class="uk-navbar-right">
                <a class=" uk-margin-left" href="#">
                    <img src="{{ asset('/img/logos/Michoacan.png') }}" alt="" width="58.47px">
                </a>
                <a class="" href="#">
                    <img src="{{ asset('/img/logos/Michoacan_se_escucha.png') }}" alt="" width="81.17px">
                </a>
            </div>
        </nav>
    </div>

    @yield('content')

    </div>
    <footer class="main-footer uk-grid-colapse uk-grid-match uk-child-width-expand@m uk-text-center uk-flex-wrap"
        uk-grid>
        <div>
            <div class="uk-padding-small">
                <a class="uk-flex uk-flex-left@m uk-flex-center uk-flex-middle" href="/inicio" style="height: 70px;">
                    <img src="{{ asset('img/logos/lgbtiMICH-white.png') }}" width="149px">
                </a>
                <div class="texto-footer uk-margin-small-top uk-flex uk-flex-left@m uk-flex-center uk-flex-middle"
                    style="width: 100%;height:25px">Copyright © 2021
                    LGBTIMichoacán</div>
                <a href="http://www.dragonware.com.mx" target="_blank"
                    class="texto-footer uk-flex uk-flex-left@m uk-flex-center uk-flex-middle uk-margin-small-top"
                    style="text-decoration: none; color:#FFFFFF; width:100%; height:25px">
                    <div class="uk-flex uk-flex-middle">
                        Desarrollado por DragonWare.
                        <img style="margin-left: 5px" src="{{ asset('img/logos/dragonBlanco.png') }}" width="23px"
                            height="16px">
                    </div>
                </a>
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-left@m uk-flex-center uk-flex-wrap ">
                <div class="texto-titulo ">MÁS INFORMACIÓN</div>
                <div class="texto-left  ">Aviso de confidencialidad</div>
                <div class="texto-left  ">Términos y condiciones</div>
                <div class="texto-titulo uk-width-1-1 uk-flex uk-flex-left@m uk-flex-center">SÍGUENOS</div>
                <div class="uk-width-1-1 uk-flex uk-flex-left@m uk-flex-center">
                    <div class="uk-width-3-5 uk-flex uk-flex-between">
                        <a href="https://www.facebook.com/zinnia.comp.escenica/" target="_blank"><i
                                class="fa fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com/ZEscenica?s=09" target="_blank"><i
                                class="fa fa-twitter fa-2x"></i></a>
                        <a href="https://www.instagram.com/zinniacompania/" target="_blank"><i
                                class="fa fa-youtube fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <img src="{{ asset('/img/icons/image.png') }}" alt="" width="81px" height="81px">
                LOGOS ADICIONALES
            </div>
        </div>
        <div>
            <div>
                <img src="{{ asset('/img/icons/image.png') }}" alt="" width="81px" height="81px">
                LOGOS ADICIONALES
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-middle uk-flex-right@m uk-flex-center uk-flex-wrap">
                <img src="{{ asset('/img/logos/mich-W.png') }}" alt="" srcset="">
                <img src="{{ asset('/img/logos/SEID-W.png') }}" alt="" srcset="">
            </div>
        </div>
    </footer>
</body>

</html>