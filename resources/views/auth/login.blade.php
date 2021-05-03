<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="container">


        <form class="form-signin" method="POST" action="{{ route('login') }}">@csrf
            <div class="text-center mb-4 text-monospace" style="color: #FF9900;">
              <img class="mb-4" src="{{ asset('img/img.png') }}" alt="" width="130" height="130">
              <h1 class="h3      font-weight-normal">Inventory Management System</h1>
              <small>Ely's Electronic Service Center</small>
            </div>
      
            <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
              <label for="email">Email Address</label>
            </div>
      
            <div class="form-label-group">
                <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
              <label for="password">Password</label>
            </div>
      
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
      
            <button class="btn btn-lg btn-primary btn-block" style="background-color: #FF9900;;" type="submit">Log In</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; {{date("Y")}} - Project of Team Avengers</p>
        </form>
        {{-- <div class="row justify-content-center" style="position: fixed;
            width:50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);">
            <div class="col-lg-5">
                <form method="POST" action="{{ route('login') }}">@csrf
                    <div class="card animated pulse">
                        <div class="card-header p-4 text-center" style="background: white">LOGIN TO PROCEED</div>
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                Making your life sweeter one bite at a time!<br>{{ date("M d Y")}}.
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                
                            </div>
                            
                        </div>
                        <div class="card-footer p-1">
                            <button type="submit" class="btn btn-secondary btn-block">Login</button>

                        </div>
                </form>
            </div>
        </div> --}}
        {{-- <div class="col-lg-7 text-center">
            <h1 class="lead" style="font-size: 1.5em">Inventory Management System</h3>
                <img class="animated pulse" src="{{ asset('img/support.svg') }}" width="90%">
                <br><br>
                <small class="mt-5">&copy; {{date("Y")}} - Project of Team Avengers </small>
        </div> --}}
    </div>
</body>

</html>