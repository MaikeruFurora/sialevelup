<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/qrious.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <style>
        .borderInput {
            border-style: solid;
            border-width: medium;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            /* background-color:rgb(255, 153, 0,0.1); */
            /* background: #343A40; */
            color: white
        }

        .centerSpinner {
            display: block;
            position: fixed;
            z-index: 1031;
            /* High z-index so it is on top of the page */
            top: 50%;
            right: 50%;
            /* or: left: 50%; */
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark shadow bg-dark animated fadeInDown">
                <a class="navbar-brand lead text-white text-monospace" href="{{ url('/') }}">
                    EESC - <small class="lead text-monospace" style="font-size: 15px">Ely's Electronic Service
                        Center</small>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <input type="hidden" id="user_type" value="{{ Auth::user()->user_type }}">
                            <a id="navbarDropdown" class="nav-link text-white" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} &nbsp;&nbsp; <span
                                    class="badge badge-pill badge-primary">{{ Auth::user()->user_type==1?'Admin':'Employee' }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="material-icons text-white"
                                    style="font-size: 20px">power_settings_new</span>
                            </a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>

        <main class="py-2">

            @yield('content')
        </main>
    </div>

    {{-- modal ORDER only for testing messages --}}
    <div class="modal fade animated bounce" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog mdal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body pb-1 bg-dark text-white text-monospace">
                    <h4 class="text-center addTextMsg"></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text animated fadeInUp">
        <div class="container" style="color:black">
            {{-- <div class="container" style="background: #343A40;"> --}}
            <div class="d-flex justify-content-center bd-highlight">
                <div class="p-2 bd-highlight"><small>This project created by <em>Team Avengers</em></small></div>
                <div class="p-2 bd-highlight">
                    <small>|&nbsp;&nbsp;&nbsp; Bootstrap <b>&middot;</b> Jquery <b>&middot;</b> Animated Effects</small>
                </div>
                <div class="p-2 bd-highlight">
                    <small>|&nbsp;&nbsp;&nbsp; &copy; 2020-2021</small>
                </div>
            </div>
        </div>
    </div>
</body>


</html>