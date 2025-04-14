<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paquetes Turísticos') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
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