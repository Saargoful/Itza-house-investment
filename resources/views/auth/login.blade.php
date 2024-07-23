
@include('partials.nav')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesión - {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            height: 100%;
            background-image: url('{{ asset('images/hero_1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Oscurece la imagen de fondo al 50% */
            z-index: 1;
        }

        .form-signin {
            position: relative;
            z-index: 2;
            max-width: 330px;
            padding: 1rem;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"], 
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-radius: 0;
        }
    </style>
</head>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body class="bg-body-tertiary">
    <div class="container">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating">
                    <label for="email">Usuario:</label>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    
                </div>

                <!-- Password -->
                <div class="form-floating mt-4">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                    
                </div>

                <!-- Remember Me -->
                {{-- <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        {{ __('Remember me') }}
                    </label>
                </div> --}}

                <!-- Submit Button -->
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Iniciar Sesión</button>
                
                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="mt-3">
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </form>
        </main>
    </div>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
