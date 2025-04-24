<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paquetes Turísticos') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('paquete.create') }}" class="btn btn-success btn-lg shadow rounded-pill px-4">
                <i class="bi bi-person-plus-fill"></i> Agregar Paquete Turistico
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($paquetes->count() > 0)
            <div class="row">
                @foreach ($paquetes as $paquete)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $paquete->nombre }}</h5>
                                <p class="card-text">
                                    <strong>Destino:</strong> {{ $paquete->destino }}<br>
                                    <strong>Precio:</strong> ${{ number_format($paquete->precio, 2) }}<br>
                                    <strong>Duración:</strong> {{ $paquete->duracion }} días
                                </p>
                                <div class="d-flex gap-2">
    <!-- Ver Detalle -->
    <a href="{{ route('paquete.show', $paquete->id) }}" class="btn btn-info btn-sm rounded-pill px-3 text-white">
        <i class="bi bi-eye"></i> Ver
    </a>

    <!-- Editar -->
    <a href="{{ route('paquete.edit', $paquete->id) }}" class="btn btn-primary btn-sm rounded-pill px-3">
        <i class="bi bi-pencil-square"></i> Editar
    </a>

    <!-- Eliminar -->
    <form action="{{ route('paquete.destroy', $paquete->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este paquete?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3">
            <i class="bi bi-trash"></i> Eliminar
        </button>
    </form>
</div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                No hay paquetes turísticos registrados aún.
            </div>
        @endif
    </div>
</x-app-layout>