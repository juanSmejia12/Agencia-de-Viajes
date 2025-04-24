<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Paquete Turístico') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            <h3 class="text-xl font-bold mb-4">{{ $paquete->destino }}</h3>

            <div class="mb-4">
                <strong>Descripción:</strong>
                <p>{{ $paquete->descripcion }}</p>
            </div>

            <div class="mb-4">
                <strong>Duración:</strong>
                <p>{{ $paquete->duracion }} días</p>
            </div>

            <div class="mb-4">
                <strong>Precio:</strong>
                <p>${{ number_format($paquete->precio, 2) }}</p>
            </div>

            <div class="mb-4">
                <strong>Incluye:</strong>
                <p>{{ $paquete->incluye }}</p>
            </div>

            <a href="{{ route('paquete.index') }}" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Volver a la lista
            </a>
        </div>
    </div>
</x-app-layout>
