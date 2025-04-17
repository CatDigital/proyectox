<!DOCTYPE html>
<html lang="es">

<head>
    <title>Iniciar Sesión</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Meta para token CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vite (Laravel 12) -->
    @vite('resources/js/app.js')
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>
            @if ($errors->any())
                <div class="alert alert-danger mt-3 text-center">
                    <strong>¡Error!</strong> {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('logear') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="usuario@ejemplo.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********"
                        required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>

                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                </div>
            </form>



        </div>
    </div>

</body>

</html>
