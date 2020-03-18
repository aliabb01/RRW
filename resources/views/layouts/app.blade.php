<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ApollonRailway</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/d02e083562.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Animation style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Page Loading -->

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark shadow-sm" id="navbar">
            <a class="navbar-brand animated slideInLeft slow" href="welcome">
                <img class="logo" src="logo/logo.png" alt="ApollonRailway" height="70" width="160">
            </a>
            <a class="navbar-brand" href="{{ url('') }}">
                <!--ApollonRailway -->
            </a>
            <hr class="line">

            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item different {{ Request::is('welcome') ? 'active' : '' }}">
                            <a class="nav-link lead" href="welcome">{{ __('msg.home')}}<a>
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
                            <style>
                                @media(min-width:992px) {
                                    .logo {
                                        margin-left: 50px;
                                    }

                                    .line {
                                        border-right: 2px solid white;
                                        height: 55px;
                                        margin-right: 25px;
                                        border-radius: 25%;
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

                                    .nav-item {
                                        /* 15px between each nav-item */
                                        margin-right: 15px;
                                    }

                                    .bg-nav {
                                        background-color: #222831;
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

                                    /* Different is the bottom red border animation that comes when hovered on navbar item*/
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

                                    #log:hover~#ico-log {
                                        color: green;
                                    }
                                }

                                body {
                                    /*background-image: url(../logo/background4.jpg);*/
                                    background-image: url('logo/background.jpg');
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-attachment: fixed;
                                }

                                .footer {
                                    margin-bottom: zero;
                                    width: 100%;
                                    position: relative;
                                    height: auto;
                                    background-color: #070617;
                                    
                                }

                                .footer .col {
                                    width: 190px;
                                    height: auto;
                                    float: left;
                                    box-sizing: border-box;
                                    -webkit-box-sizing: border-box;
                                    -moz-box-sizing: border-box;
                                    padding: 0px 20px 20px 20px;
                                }

                                .footer .col h1 {
                                    margin: 0;
                                    padding: 0;
                                    font-family: inherit;
                                    font-size: 12px;
                                    line-height: 17px;
                                    padding: 20px 0px 5px 0px;
                                    color: rgba(255, 255, 255, 0.2);
                                    font-weight: normal;
                                    text-transform: uppercase;
                                    letter-spacing: 0.250em;
                                }

                                .footer .col ul {
                                    list-style-type: none;
                                    margin: 0;
                                    padding: 0;
                                }

                                .footer .col ul li {
                                    color: #999999;
                                    font-size: 14px;
                                    font-family: inherit;
                                    font-weight: bold;
                                    padding: 5px 0px 5px 0px;
                                    cursor: pointer;
                                    transition: .2s;
                                    -webkit-transition: .2s;
                                    -moz-transition: .2s;
                                }

                                .social ul li {
                                    display: inline-block;
                                    padding-right: 5px !important;
                                }

                                .footer .col ul li:hover {
                                    color: #ffffff;
                                    transition: .1s;
                                    -webkit-transition: .1s;
                                    -moz-transition: .1s;
                                }

                                .clearfix {
                                    clear: both;
                                }
                            </style>
                            <div class="dropdown-menu animated lightSpeedIn" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item different {{ Request::is('feedback') ? 'active' : '' }}">
                            <a class="nav-link lead" href="feedback">{{ __('msg.feedback')}}</a>
                        </li>
                        <li class="nav-item different {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link lead" href="contact">{{ __('msg.contact-us')}}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Authentication Links -->
                        @guest
                        <i class="fas fa-sign-in-alt icon ico-log"></i>
                        <li class="nav-item different">
                            <a class="nav-link log {{ Request::is('login') ? 'active' : '' }}"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <i class="fas fa-user-plus icon"></i>
                        <li class="nav-item different">
                            <a class="nav-link reg {{ Request::is('register') ? 'active' : '' }}"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

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
        <main class="py-4">
            @yield('content')

            <!-- FOOTER START -->
            <div class="footer">
                <div class="container">
                    <div class="col">
                        <h1>Company</h1>
                        <ul>
                            <li>About</li>
                            <li>Mission</li>
                            <li>Services</li>
                            <li>Social</li>
                            <li>Get in touch</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h1>Products</h1>
                        <ul>
                            <li>About</li>
                            <li>Mission</li>
                            <li>Services</li>
                            <li>Social</li>
                            <li>Get in touch</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h1>Accounts</h1>
                        <ul>
                            <li>About</li>
                            <li>Mission</li>
                            <li>Services</li>
                            <li>Social</li>
                            <li>Get in touch</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h1>Resources</h1>
                        <ul>
                            <li>Webmail</li>
                            <li>Redeem code</li>
                            <li>WHOIS lookup</li>
                            <li>Site map</li>
                            <li>Web templates</li>
                            <li>Email templates</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h1>Support</h1>
                        <ul>
                            <li>Contact us</li>
                            <li>Web chat</li>
                            <li>Open ticket</li>
                        </ul>
                    </div>
                    <div class="col social">
                        <h1>Social</h1>
                        <ul>
                            <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
                            <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
                            <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END OF FOOTER -->
        </main>
    </div>
</body>


</html>