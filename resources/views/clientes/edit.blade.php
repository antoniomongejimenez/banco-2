<x-plantilla>
    <form action="{{ route('clientes.update', [$cliente], false) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="dni"
                class="text-sm font-medium text-gray-900 block mb-2 @error('dni') text-red-500 @enderror">
                Título
            </label>
            <input type="text" name="dni" id="dni"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('dni') border-red-500 @enderror"
                value="{{ old('dni', $cliente->dni) }}">
            @error('dni')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="nombre"
                class="text-sm font-medium text-gray-900 block mb-2 @error('nombre') text-red-500 @enderror">
                nombre
            </label>
            <input type="text" name="nombre" id="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('nombre') border-red-500 @enderror"
                value="{{ old('nombre', $cliente->nombre) }}">
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
        <a href="/clientes" class="mt-4 text-blue-900 hover:underline">Volver</a>
    </form>
</x-plantilla>
