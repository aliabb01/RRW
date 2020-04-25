<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ApollonRailway</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('/logo/favicon.ico') }}" type="image/x-icon" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/d02e083562.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Script that enables tooltips -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/dc6734899329fcbdd770b32dc47059d8?family=Sofia+Pro+Light" rel="stylesheet"
        type="text/css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet" /> <!-- For social network buttons -->

    <!-- Animation style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Flags -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css"
        integrity="sha256-YjcCvXkdRVOucibC9I4mBS41lXPrWfqY2BnpskhZPnw=" crossorigin="anonymous" />

    <!-- Admin -->


    <!-- Page Loading -->

</head>
<style>
    :root {
        --primary: darkred;
        --langActive: orange;
    }

    * {
        padding: 0px;
        margin: 0px;
    }

    @media only screen and (min-width:1024px) {
        .logo {
            margin-left: 50px;
        }

        .logo-name:hover {
            filter: drop-shadow(0px 3px 7px);
        }

        .img-logo {
            /* Hover OFF */
            transition: 0.2s;
        }

        .img-logo:hover {
            /*  Changes the background color when hovered on color  */
            filter: contrast(200%);
            transition: 0.2s;
            /* Hover ON */
        }

        .line {
            border-right: 2px solid white;
            height: 55px;
            /* margin-right: 25px;*/
            border-radius: 25%;
            transform: rotate(45deg);
        }

        /* Delete this .dropdown methods if you want the clickable dropdown menu */
        .dropdown-S:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin: 0;

        }

        .dropdown-S>.dropdown-toggle:active {
            pointer-events: none;
        }

        .drop-ser {
            width: 200%;
            font-size: 1rem;
        }

        .dropdown-item:hover {
            background-color: rgb(0, 125, 200);
            color: white;
        }

        .dr-lang {
            color: #FFA500;
            text-decoration: none;
        }

        a:hover {
            color: #FFA500;
        }

        #lang-link {
            color: white;
        }

        #EN:hover {
            background-color: #007DC8;
        }

        #RU:hover {
            background-color: #007DC8;
        }

        #LT:hover {
            background-color: #007DC8;
        }

        #lang-link:hover {
            color: #FFA500;
        }

        .lang-toggle:hover {
            text-decoration: solid #FFA500;
        }

        .nav-item {
            /* 15px between each nav-item */
            margin-right: 15px;
        }

        .navbar-nav .nav-item:hover .nav-link {
            color: lightskyblue;
            /*color of nav-link*/
            /* blue part of logo: rgb(76, 174, 255);*/
            text-shadow: 0px 0px 7px skyblue;
            /*box-shadow: */
            margin-top: 2%;
            transition: font-size .3s linear;
        }

        /*.nav-link {
                                        --backColor: skyblue;
                                        background:
                                            linear-gradient(to top,
                                            var(--backColor) 0%,
                                            var(--backColor) 0px,
                                            transparent 0px);
                                        background-repeat: repeat-y;
                                        text-decoration: none;
                                    }

                                    .nav-link:hover {
                                        background:
                                            linear-gradient(to top,
                                            var(--backColor) 0%,
                                            var(--backColor) 0px,
                                            transparent);
                                        transition: var(--backColor) 5s, color .5s;
                                    }*/

        /* Different is the bottom green border animation that comes when hovered on navbar item*/
        .different {
            border: none;
            position: relative;
        }

        .different::after {
            content: '';
            position: absolute;
            /* Change this to absolute/relative depending on nav-link:hover style */
            width: 0px;
            height: 2px;
            /*left:50%*/
            /*    ^       */
            /* |  Delete this line to start the red border animation from left and not from center */
            bottom: 0;
            background-color: rgb(65, 154, 28);
            transition: all ease-in-out .3s;
            margin-bottom: 3px;
        }

        .different:hover::after {
            width: 100%;
            left: 0;
        }

        #log {
            margin: 0;
        }

        #log~#ico-log {
            /* HOVER OFF */
            transition: color .5s;
        }

        #log:hover~#ico-log {
            /* HOVER ON */
            color: green;
            transition: color .5s;
        }

        #ico-log {
            color: white;
        }

        #ico-reg {
            color: white;
        }

        #reg {
            margin: 0;
            margin-left: 15px;
        }

        #reg~#ico-reg {
            /* HOVER OFF */
            transition: color .5s;
        }

        #reg:hover~#ico-reg {
            /* HOVER ON */
            color: red;
            transition: color .5s;
        }

        /*#logout:hover #logout-ico-nav{
            color:            
        }*/
        #logout:hover {
            background-color: #FF564B;
        }

        #logout:hover #logout-ico-nav {
            color: #05263F;
            -webkit-text-stroke: 0.7px skyblue;
        }

        #my-profile:hover #user-ico-nav {
            color: #05263F;
            -webkit-text-stroke-width: 0.5px;
            /* Makes the icon a bit bold */
            -webkit-text-stroke: 1px whitesmoke;
        }

        #X-sign:hover {
            color: orange;
            filter: brightness(135%);
        }

        /* Color Switcher */

        .onoffswitch {
            position: relative;
            width: 90px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .onoffswitch-checkbox {
            display: none;
        }

        .onoffswitch-label {
            display: block;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid #999999;
            border-radius: 20px;
        }

        .onoffswitch-inner {
            display: block;
            width: 200%;
            margin-left: -100%;
            transition: margin 0.3s ease-in 0s;
        }

        .onoffswitch-inner:before,
        .onoffswitch-inner:after {
            display: block;
            float: left;
            width: 50%;
            height: 30px;
            padding: 0;
            line-height: 30px;
            font-size: 11px;
            color: white;
            font-family: Trebuchet, Arial, sans-serif;
            font-weight: bold;
            box-sizing: border-box;
        }

        .onoffswitch-inner:before {
            content: "LIGHT";
            padding-left: 10px;
            background-color: #EEEEEE;
            color: black;
        }

        .onoffswitch-inner:after {
            content: "DARK";
            padding-right: 10px;
            background-color: #34A7C1;
            color: white;
            text-align: right;
        }

        .onoffswitch-switch {
            display: block;
            width: 35px;
            margin: 6px;
            margin-top: 1px;
            float: right;
            background: #FFFFFF;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 42px;
            border: 2px solid #999999;
            border-radius: 20px;
            transition: all 0.3s ease-in 0s;
        }

        .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
            margin-left: 0;
        }

        .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
            right: 0px;
        }
    }

    body {
        /*background-image: url(../logo/background4.jpg);*/

    }

    .bg-nav {
        background-color: #05263F;
        /* dark-grey--rgb(52, 58, 64); */
        /* grey */
    }



    @media only screen and (min-width:768px) {
        /* Medium devices (landscape tablets, 768px and up) */

        .img-logo {
            width: 75%;
        }
    }

    @media only screen and (max-width:768px) {
        .nav-link {
            font-size: 80%;
        }

        .logo-name {
            font-size: 80%;
        }
    }

    @media only screen and (max-width: 600px) {
        /* Large devices (phones, 600px and down) */

        .img-logo {
            width: 45%;
        }
    }

    @media only screen and (max-width: 425px) {

        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
        }


    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-nav shadow-sm" id="navbar">
            <a class="navbar-brand " href="welcome">
                <!-- <img class="logo" src="logo/logo.png" alt="ApollonRailway" height="70" width="160"> -->
                <span class="logo-name" style="">Apollon</span>
                <img class="animated slideInDown slow img-logo" src="logo/logo2.png" alt="">
            </a>
            <!--  <hr class="line">  -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="dropdown dr-lang language-selector text-light">
                {{ __('msg.language')}} :
                <a href="#" id="lang-link" class="dropdown-toggle lang-toggle" data-toggle="dropdown"
                    data-close-others="true">

                    <!-- Language switcher function to check local language -->

                    @if (App::isLocale('en'))
                    {{$lang='EN'}}
                    <style>
                        #EN {
                            background-color: var(--langActive);
                        }
                    </style>
                    @endif

                    @if (App::isLocale('ru'))
                    {{$lang='RU'}}
                    <style>
                        #RU {
                            background-color: var(--langActive);
                        }
                    </style>
                    @endif

                    @if (App::isLocale('lt'))
                    {{$lang='LT'}}
                    <style>
                        #LT {
                            background-color: var(--langActive);
                        }
                    </style>
                    @endif

                </a>
                <ul class="dropdown-menu ml-1">
                    <li>
                        <a class="dropdown-item" id="EN" href="{{ url('locale/en') }}">
                            <i class="flag-icon flag-icon-gb"></i>
                            <span>English</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="dropdown-item" id="RU" href="{{ url('locale/ru') }}">
                            <i class="flag-icon flag-icon-ru"></i>
                            <span>Russian</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="LT" href="{{ url('locale/lt') }}">
                            <i class="flag-icon flag-icon-lt"></i>
                            <span>Lithuanian</span>
                        </a>
                    </li>
                </ul>
            </div>


            <!--   <ul>
                <li><a href="{{ url('locale/en') }}"><i class="flag-icon flag-icon-us"></i> EN</a></li>
                <li><a href="{{ url('locale/ru') }}"><i class="flag-icon flag-icon-ru"></i> RU</a></li>
                <li><a href="{{ url('locale/lt') }}"><i class="flag-icon flag-icon-lt"></i> LT</a></li>
            </ul>  -->

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item different {{ Request::is('welcome') ? 'active' : '' }}">
                            <a class="nav-link lead" href="/welcome">{{ __('msg.home')}}</a>
                        </li>
                        <li class="nav-item different {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link lead" href="about">{{ __('msg.about')}}</a>
                        </li>
                        <li
                            class="nav-item dropdown dropdown-S different {{ Request::is('services') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle lead" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('msg.services')}}
                            </a>




                            <div class="dropdown-menu animated flipInX drop-ser" id="dropdown-services"
                                aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item " href="services-special">Special offers</a>
                                <a class="dropdown-item" href="services-advertising">Advertising</a>
                                <a class="dropdown-item" href="services-baggage">Baggage Transportation</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="services-careers">Careers</a>
                            </div>
                        </li>
                        <li class="nav-item different {{ Request::is('feedback') ? 'active' : '' }}">
                            <a class="nav-link lead" href="feedback">{{ __('msg.feedback')}}</a>
                        </li>
                        <li class="nav-item different {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link lead help" href="help">{{ __('msg.help')}}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <!-- ON/OFF switch -->
                    <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
                            checked>
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch text-center"></span>
                        </label>
                    </div>
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item different" id="log">
                            <a class="nav-link log {{ Request::is('login') ? 'active' : '' }}"
                                href="{{ route('login') }}">{{ __('msg.login') }}</a>
                        </li>
                        <i class="fas fa-sign-in-alt icon" id="ico-log"></i>

                        @if (Route::has('register'))

                        <li class="nav-item different" id="reg">
                            <a class="nav-link reg {{ Request::is('register') ? 'active' : '' }}"
                                href="{{ route('register') }}">{{ __('msg.register') }}</a>
                        </li>
                        <i class="fas fa-user-plus icon" id="ico-reg"></i>

                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <!-- DROPDOWN ITEMS STARTS HERE -->
                            <div class="dropdown-menu dropdown-menu-right animated flipInX fast"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="my-profile" href="myprofile">
                                    <i class="fas fa-user" id="user-ico-nav"></i> My Profile
                                </a>
                                <a class="dropdown-item" id="logout" href="{{route('logout')}}" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    <i class="fas fa-sign-out-alt" id="logout-ico-nav"></i> {{ __('Logout') }}
                                </a>

                                <!-- Button trigger modal -->
                                <!--<button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Launch demo modal
                                </button> -->

                                <!-- Alert ask logout -->
                                <script type="text/javascript">
                                    function logout(event){
                                            event.preventDefault();
                                            var check = confirm("Do you really want to logout?");
                                            if(check){ 
                                               document.getElementById('logout-form').submit();
                                            }
                                     }
                                </script>
                                <!--     -->

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- MODAL -->
        <!-- Modal is put on top of main after the whole navbar and styling -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
                                class="text-light">Are you sure you want to leave?</span></h5>
                        <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <small><b>Note :</b></small><br>
                        You will be redirected to <a href="?" data-toggle="tooltip" title="Homepage of the website">
                            main page </a> after you <b>log out</b> .
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Yes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No, return me back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL END  -->

        <main class="">
            @yield('content')
        </main>

    </div>
    @include('layouts.footer')
    @yield('scripts')

    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>