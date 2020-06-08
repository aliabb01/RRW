<!--  
    Developers:
    Ali ABBASOV --- Layout designer and Frontend
    Mahdi ALLAFI--- backend devloper

-->

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

    <!--CoreUI Bootstrap -->
    <!-- Used for callout style for counters in footer + CoreUI icons -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.0.0-rc.0/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/all.min.css">

    <!--jQuery and daterangepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="{{ mix("js/bootstrap-input-spinner.js") }}"></script>



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
        --primary-skyblue: #5893D3;
        /* bootstrap primary */

        --primary-orange: #FF9D1B;
        --laravel-logo: #FF564B;
        --langActive: orange;
        --menu-nav: #05263F;
        /* light theme */

        --menu-gray: #313A45;
        /* Mehdi liked this color */

        --body-background: #f2f2f2;
    }

    .collapse.in {
        /*  navbar toggler fix */
        display: block !important;
    }


    * {
        padding: 0px;
        margin: 0px;
    }



    @media only screen and (min-width:1024px) {

        body::-webkit-scrollbar {
            width: 15px;
            /* width of the entire scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: rgb(230, 230, 230);
            /* color of the tracking area */
        }

        body::-webkit-scrollbar-thumb {
            background-color: #1f4068;
            /* color of the scroll thumb */
            /*border-radius: 10px;*/
            /* roundness of the scroll thumb */
            border: 0.1px solid white;
            /* creates padding around scroll thumb */
        }

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

        /* Delete these 3 .dropdown methods if you want the clickable dropdown menu */
        .dropdown-S:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin: 0;
            background-color: rgb(230, 230, 230);
        }

        .dropdown-S>.dropdown-toggle:active {
            pointer-events: none;
        }

        .dropdown-S .drop-tog {
            transition: 0.3s ease-in-out;
        }

        .dropdown-S:hover .drop-tog {
            color: var(--primary-orange);
            transform: rotateX(180deg);
            transition: 0.3s ease-in;
        }

        .drop-ser {
            width: 200%;
            font-size: 1rem;
        }

        .dr-item-ser:hover {
            background-color: rgb(0, 125, 200);
            color: white;
        }

        .dr-lang {
            color: var(--primary-orange);
            text-decoration: none;
        }

        a:hover {
            color: var(--primary-orange);
        }

        #lang-link {
            color: white;
        }

        #lang-link:focus #lang-dropdown-toggle {
            transform: rotateX(180deg);
            color: var(--laravel-logo);
        }

        #EN:hover {
            background-color: var(--primary-skyblue);
            filter: brightness(110%);
        }

        #RU:hover {
            background-color: var(--primary-skyblue);
            filter: brightness(110%);
        }

        #LT:hover {
            background-color: var(--primary-skyblue);
            filter: brightness(110%);
        }

        #lang-link:hover {
            color: var(--primary-orange);
        }

        .lang-toggle:hover {
            text-decoration: solid var(--primary-orange);
        }

        .lang-dropdown-toggle {}

        .btn-arrow-down:hover .arrow-down {
            color: var(--primary-orange);
        }

        .arrow-down:focus {
            transform: rotate(180deg);
        }

        #navbar {
            border-style: solid;
            -webkit-box-shadow: 0px 6px 9px 0px rgba(41, 25, 41, 0.7) !important;
            -moz-box-shadow: 0px 6px 9px 0px rgba(41, 25, 41, 0.7) !important;
            box-shadow: 0px 6px 9px 0px rgba(41, 25, 41, 0.7) !important;
        }

        .navbar-nav {
            z-index: 1000;
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
            transition: 0.2s;
        }

        #home {
            transition: 0.5s;
        }

        #home:hover {
            margin-top: 1%;
            transition: 0.5s;
        }

        #about {
            transition: 0.5s;
        }

        #about:hover {
            margin-top: 1%;
            transition: 0.5s;
        }

        #services {
            transition: 0.5s;
        }

        #services:hover {
            margin-top: 1%;
            transition: 0.5s;
        }

        #feedback {
            transition: 0.5s;
        }

        #feedback:hover {
            margin-top: 1%;
            transition: 0.5s;
        }

        #help {
            transition: 0.5s;
        }

        #help:hover {
            margin-top: 1%;
            transition: 0.5s;
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
            background-color: #41A317;
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
            background-color: var(--laravel-logo);
            color: white;
        }

        #logout:hover #logout-ico-nav {
            color: #05263F;
            -webkit-text-stroke: 0.7px white;
        }

        #my-profile:hover {
            background-color: var(--primary-skyblue);
            color: white;
        }

        #my-profile:hover #user-ico-nav {
            color: #05263F;
            -webkit-text-stroke-width: 0.5px;
            /* Makes the icon a bit bold */
            -webkit-text-stroke: 1px whitesmoke;
        }

        #my-profile:hover #history-ico-nav {
            color: #05263F;
            -webkit-text-stroke-width: 2px;
            /* Makes the icon a bit bold */
            -webkit-text-stroke: 0.05px whitesmoke;
        }

        #X-sign:hover {
            color: var(--primary-orange);
            filter: brightness(135%);
        }

        #topBTN {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: var(--primary-skyblue);
            filter: brightness(102%);
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 100%;
            width: 58px;
        }

        #topBTN:hover {
            filter: brightness(95%);
        }

        #topBTN:hover .back-to-top-ico {
            color: var(--primary-orange);
            filter: brightness(140%);
        }

        /* -----------------------  */
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
            --menu-dark: var(--menu-gray);
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

        .keep-ticket-link:hover .keep-ticket-span {
            color: white;
        }

        /* -----------------------  */
        /* Center the loader */
        #loader {
            position: fixed;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid var(--primary-skyblue);
            border-bottom: 16px solid var(--primary-orange);
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        .info {
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
        }
    }

    body {
        /*background-image: url(../logo/background4.jpg);*/
        background-color: var(--body-background);

    }

    .bg-nav {
        background-color: var(--menu-nav);
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

        .navbar {
            position: relative;
        }
    }

    @media only screen and (max-width: 425px) {

        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
        }


    }
</style>

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-nav shadow-sm" id="navbar">
            <a class="navbar-brand " href="welcome">
                <!-- <img class="logo" src="logo/logo.png" alt="ApollonRailway" height="70" width="160"> -->
                <span class="logo-name" style="">Apollon</span>
                <img class="animated slideInDown slow img-logo" src="logo/logo2.png" alt="">
            </a>
            <!--  <hr class="line">  -->
            <button class="collapsed navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="dropdown dr-lang language-selector text-light">
                {{ __('msg.language')}} :
                <a href="#" id="lang-link" class="lang-toggle text-center" data-toggle="dropdown"
                    data-close-others="true">

                    <!-- Language switcher function to check local language -->

                    @if (App::isLocale('en'))
                    {{$lang='EN'}}
                    <style>
                        #EN {
                            background-color: var(--langActive);
                        }

                        #eng-lang-label {}
                    </style>
                    @endif

                    @if (App::isLocale('ru'))
                    {{$lang='RU'}}
                    <style>
                        #RU {
                            background-color: var(--langActive);
                        }

                        #ru-lang-label {}
                    </style>
                    @endif

                    @if (App::isLocale('lt'))
                    {{$lang='LT'}}
                    <style>
                        #LT {
                            background-color: var(--langActive);
                        }

                        #lt-lang-label {}
                    </style>
                    @endif

                    <div class="dropdown-toggle text-center" id="lang-dropdown-toggle" style="display:inline-block;">
                    </div>
                </a>
                <ul class="dropdown-menu ml-1">
                    <li>
                        <a class="dropdown-item" id="EN" href="{{ url('locale/en') }}">
                            <i class="flag-icon flag-icon-gb"></i>
                            <span id="eng-lang-label">English</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="RU" href="{{ url('locale/ru') }}">
                            <i class="flag-icon flag-icon-ru"></i>
                            <span id="ru-lang-label">Русский</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="LT" href="{{ url('locale/lt') }}">
                            <i class="flag-icon flag-icon-lt"></i>
                            <span id="lt-lang-label">Lietuvių</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a class="btn btn-arrow-down" style="border-radius:100%;" type="button" data-toggle="collapse"
                            data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fas fa-arrow-circle-down arrow-down" id="arrow-down"></i>
                        </a>
                    </li>
                    <div class="collapse text-center" id="collapseExample1" style="margin-top:5%;">
                        <img class="animated flipInY" src="https://img.icons8.com/office/50/000000/translation.png" />
                        <p>Help Translate this site: <a href="/help-translate">Translate here</a></p>
                    </div>

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
                        <li class="nav-item different {{ Request::is('welcome') ? 'active' : '' }}" id="home">
                            <a class="nav-link lead" href="/welcome">{{ __('msg.home')}}</a>
                        </li>
                        <li class="nav-item different {{ Request::is('about') ? 'active' : '' }}" id="about">
                            <a class="nav-link lead" href="/about">{{ __('msg.about')}}</a>
                        </li>
                        <li class="nav-item dropdown dropdown-S different {{ Request::is('services') ? 'active' : '' }}"
                            id="services">
                            <a class="nav-link lead" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{ __('msg.services')}} <div style="margin-left:8px; width:8px; display:inline-block;"
                                    class="dropdown-toggle drop-tog"></div>

                            </a>



                            <div class="dropdown-menu animated flipInX drop-ser" id="dropdown-services"
                                aria-labelledby="navbarDropdownMenuLink">
                                <small class="dropdown-header"><b>Main</b></small>
                                <a class="dropdown-item" href="services-special">Special offers <img
                                        style="margin-left:32%;"
                                        src="https://img.icons8.com/color/30/000000/brief.png" /></a>
                                <a class="dropdown-item" href="services-advertising">Advertising <img
                                        style="margin-left:40%;"
                                        src="https://img.icons8.com/dusk/30/000000/commercial.png" /></a>
                                <a class="dropdown-item" href="services-baggage">Baggage <img style="margin-left:50%;"
                                        src="https://img.icons8.com/officel/30/000000/luggage-trolley.png" /></a>
                                <div class="dropdown-divider" style="border-color:black;"></div>
                                <a class="dropdown-item" href="services-careers">Careers <img style="margin-left:55%;"
                                        src="https://img.icons8.com/office/30/000000/work.png" /></a>
                            </div>
                        </li>
                        <li class="nav-item different {{ Request::is('feedback') ? 'active' : '' }}" id="feedback">
                            <a class="nav-link lead" href="feedback">{{ __('msg.feedback')}}</a>
                        </li>
                        <li class="nav-item different {{ Request::is('help') ? 'active' : '' }}" id="help">
                            <a class="nav-link lead" href="help">{{ __('msg.help')}}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <!-- ON/OFF switch -->
                    <!--<div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
                            checked>
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch text-center"></span>
                        </label>
                    </div> -->


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
                                <a class="dropdown-item" id="my-profile" href="myprofile">
                                    <i class="fas fa-history" id="history-ico-nav"></i> Orders
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


        <main class="" id="main">
            @yield('content')

        </main>


        @include('layouts.footer')
    </div>

    @yield('scripts')



    <!-- Cancel Modal -->
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
                            class="text-light">Are you sure you want to cancel your reservation?</span></h5>
                    <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
                    </button>
                </div>
                <div class="modal-body">
                    <small><b>Note :</b></small><br>
                    <span style="font-size:110%;">You won't be able to revert this!</span>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-outline-danger" href="">Yes, cancel</a>
                    <a class="btn btn-primary keep-ticket-link" data-dismiss="modal"><span class="text-light">No, keep
                            my ticket!</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cancel Modal END-->

    <!-- Checking if user is logged in or not for MODALS -->

    @if (Auth::guest())
    @else
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
                    <button type="button" class="btn btn-outline-primary" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No, return me back</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL END  -->

    <!-- MODAL -->
    <!-- Modal is put on top of main after the whole navbar and styling -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
                            class="text-light">Are you sure you want to delete your account?</span></h5>
                    <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
                    </button>
                </div>
                <div class="modal-body">
                    <small><b>Note :</b></small><br>
                    Your information will be <b> deleted</b> and your data within the website will be <b>lost</b>.
                    Are you sure you
                    want to continue?
                </div>
                <div class="modal-footer">
                    <form action="{{'/del/'.Auth::user()->id}}" method="POST">
                        <button type="submit" class="btn btn-outline-primary">
                            @csrf
                            @method('delete')
                            Yes, continue
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No, return me
                            back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL END  -->

    <!-- MODAL for update/edit info-->
    <!-- Modal is put on top of main after the whole navbar and styling -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
                            class="text-light col-md-auto">Your profile information</span></h5>
                    <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
                    </button>
                </div>
                <div class="modal-body">
                    <span>You can edit your account information below:</span> <br>
                    <form action=" {{'/upd/'.Auth::user()->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="container">
                            <div class="form-group">
                                <label for="id"><b>ID * :</b> <small>(Specific code of your account which is used to
                                        identify
                                        you)</small></label>
                                <input type="text" class="form-control" value="{{Auth::user()->id}}" readonly>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name"><b>Name :</b></label>
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email"><b>Email :</b></label>
                                <input type="value" class="form-control" name="email" value="{{Auth::user()->email}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone"><b>Phone :</b></label>
                                <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="country"><b>Country :</b></label>
                                <input type="value" class="form-control" name="country"
                                    value="{{Auth::user()->country}}">
                            </div>
                            <br>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm">
                        <b>* Cannot</b> be changed by the user
                    </div>
                    <div class="container-right">
                        <button type="submit" class="btn btn-primary">
                            Update</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Back</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL END  -->
    @endif

    <button class="btn btn-outline-primary" onclick="topFunction()" id="topBTN"
        data-delay='{"show":"500", "hide":"100"}' data-toggle="tooltip" title="Go to top"><i
            class="fas fa-arrow-up back-to-top-ico"></i></button>

    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip({
            trigger : 'hover'
        });
    });
    </script>

    <script>
        document.getElementById('myonoffswitch').checked   
    </script>

    <script>
        var myVar;
        var blur = document.getElementById("app").style.filter = "brightness(0.50)";
    
    function myFunction() {
      myVar = setTimeout(showPage, 1000);
      blur = setTimeOut(showPage, 1000);
    }
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("app").style.display = "block";
      document.getElementById("app").style.filter = "brightness(1)"; 
      document.getElementById('main-search-result-container').style.display = "block";     
      document.getElementById('search-tickets').classList.add("animated");
      document.getElementById('search-tickets').classList.add("zoomIn"); 
      document.getElementById('search-tickets').classList.add("faster"); 
    }
    </script>

    <!-- Back to top script -->
    <script>
        //Get the button
        var mybutton = document.getElementById("topBTN");
        
        // When the user scrolls down 500px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            $('html,body').animate({scrollTop: 0}, 500);
        }
    </script>
</body>

</html>