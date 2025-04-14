<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('clientes.create') }}" class="btn btn-success btn-lg shadow rounded-pill px-4">
                <i class="bi bi-person-plus-fill"></i> Agregar Cliente
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($clientes->count() > 0)
            <div class="row">
                @foreach ($clientes as $cliente)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cliente->nombre }} {{ $cliente->apellido }}</h5>
                                <p class="card-text">
                                    <strong>Teléfono:</strong> {{ $cliente->telefono }}<br>
                                    <strong>Email:</strong> {{ $cliente->email }}<br>
                                    <strong>Dirección:</strong> {{ $cliente->direccion }}
                                </p>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este cliente?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3">
                                    <i class="bi bi-trash-fill"></i> Eliminar
                                    </button>
                                    </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                No hay clientes registrados aún.
            </div>
        @endif
    </div>
</x-app-layout>
