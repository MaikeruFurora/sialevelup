<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script> --}}
    <link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/qrious.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</head>

<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow">
                <a class="navbar-brand lead" href="{{ url('/') }}">
                    EESC - <small class="lead" style="font-size: 14px">Ely's Electronic Service Center</small>
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
                    <ul class="navbar-nav ml-auto">
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" data-toggle="modal" data-target="#generaSetting">
                                    {{ __('General Setting') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
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
</body>

<!-- Modal -->
<div class="modal aminated fade" id="generaSetting" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="generaSettingLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header p-2">
          <h5 class="modal-title" id="generaSettingLabel">General Setting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form>
                        <h1 class="lead">Edit Your Profile</h1>
                        <div class="form-group mt-4">
                          <small for="exampleInputEmail1">Username</small>
                          <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <small for="exampleInputPassword1">Password</small>
                          <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <small for="exampleInputPassword1">Confirm-Password</small>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <button type="button" class="btn btn-sm btn-primary">Update</button>
                      </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="lead">Secure your Account,and How?</h1>
                    <p class="lead mt-4 text-justify">
                        Default checkboxes and radios are improved upon with the help of .form-check, a single class for both input types that 
                    improves the layout and behavior of their HTML elements.Checkboxes are for selecting one or several options
                    in a list, while radios are for selecting one option from many.
                    </p>
                </div>
            </div>
            <hr>
            <h1 class="lead">List of Employees</h1>
            <form action="">
                <div class="form-row mt-3">
                    <div class="form-group col-lg-3 col-md-12 col-sm-12">
                      <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Name of employee">
                    </div>
                    <div class="form-group col-lg-3 col-md-12 col-sm-12">
                      <input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Username">
                    </div>
                    <div class="form-group col-lg-3 col-md-12 col-sm-12">
                        <input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-lg-3 col-md-12 col-sm-12">
                        <button class="btn btn-warning btn-block btn-sm">Submit</button>
                    </div>
                </div>
            </form>
            <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>

</html>