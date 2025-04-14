@extends('layout.index')

@section('contenido')
    <div class="text-center py-5">
        <h1 class="display-4 fw-bold text-primary">¡Bienvenido a la Intranet!</h1>
        <p class="lead text-muted mt-3">
            Esta es la plataforma central para acceder a todos tus módulos, tareas y herramientas internas.
        </p>

        <div class="mt-5 d-flex justify-content-center gap-4">
            <a href="/menu" class="btn btn-outline-primary btn-lg">
                Ir al Menú Principal
            </a>
            <a href="/dashboard" class="btn btn-primary btn-lg">
                Ir al Dashboard
            </a>
        </div>

        <div class="mt-5">
            <img src="https://via.placeholder.com/600x300" class="img-fluid rounded shadow" alt="Bienvenida">
        </div>
    </div>
@endsection
