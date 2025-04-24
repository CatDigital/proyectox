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

        <div class="container mt-5" id="productos-nuevos">
            <h3 class="text-start mb-4 fw-bold">¡Productos Nuevos!</h3>
            @if (isset($productos) && count($productos))
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($productos as $producto)
                        <div class="col">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset('storage/productos/' . $producto->imagen) }}" class="card-img-top"
                                    alt="{{ $producto->nombre }}">
                                <div class="card-body">
                                    <span class="badge bg-warning text-dark mb-2">Nuevo</span>
                                    <h5 class="card-title fw-bold">{{ $producto->nombre }}</h5>
                                    <p class="card-text text-muted">
                                        {{ \Illuminate\Support\Str::limit($producto->descripcion, 100) }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0 fw-semibold">${{ number_format($producto->precio, 0, ',', '.') }}</p>
                                        <button class="btn btn-dark rounded-circle">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-muted">No hay productos nuevos disponibles.</p>
            @endif
            
        </div>

    @endsection
