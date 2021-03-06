<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Styles -->
    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body style="background: #0678BE;color:white">
    <div class="container">


        <form class="form-signin" method="POST" action="{{ route('login') }}">@csrf
            <div class="text-center mb-4 text-monospace" style="color: ">
              <img class="mb-4" src="{{ asset('img/logos.png') }}" alt="" width="125" height="120">
              <h1 class="h3      font-weight-normal">Inventory Management System</h1>
              <small>Ely's Electronic Service Center</small>
            </div>
      
            <div class="form-label-group">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
              <label for="username">Username</label>
            </div>
      
            <div class="form-label-group">
                <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password" placeholder="Password">

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
      
            <button class="btn btn-lg btn-info btn-block" style="background-color: ;" type="submit">Log In</button>
            <p class="mt-5 mb-3 text-center">&copy; {{date("Y")}} - Project of Team Avengers</p>
        </form>
    </div>
</body>

</html>