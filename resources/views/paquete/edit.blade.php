<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Paquete Turístico') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('paquete.update', $paquete->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="destino" class="block text-sm font-medium text-gray-700">Destino</label>
                        <input type="text" name="destino" id="destino" value="{{ $paquete->destino }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ $paquete->descripcion }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="duracion" class="block text-sm font-medium text-gray-700">Duración (días)</label>
                        <input type="number" name="duracion" id="duracion" value="{{ $paquete->duracion }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                        <input type="number" step="0.01" name="precio" id="precio" value="{{ $paquete->precio }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="incluye" class="block text-sm font-medium text-gray-700">Incluye</label>
                        <textarea name="incluye" id="incluye" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ $paquete->incluye }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Actualizar Paquete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
