<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cuentas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>
                        <table class="table-auto">
                            <thead>
                                <th class="px-6 py-2 text-gray-500">
                                    Número
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($cuentas as $cuenta)
                                    <tr>
                                        <td class="px-6 py-2">{{ $cuenta->numero }}</td>
                                        <td>
                                            <div class="text-sm text-gray-900">
                                                <form action="{{ route('cuentas.addtitular', $cuenta) }}" method="GET">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" class="px-4 py-1 text-sm text-white bg-green-400 rounded">Meter titulares</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('cuentas.titulares', $cuenta) }}" method="GET">
                                                <button class="py-1 px-4 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 font-medium rounded text-sm text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Titulares</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('cuentas.movimientos', $cuenta)}}" class="mt-4 text-blue-900 hover:underline">Movimientos</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/cuentas/create" class="mt-4 text-blue-900 hover:underline">Crear nueva cuenta</a>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
