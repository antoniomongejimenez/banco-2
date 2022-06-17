<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Movimientos de la cuenta: {{$cuenta->numero}}
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
                                    Fecha
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Concepto
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Importe
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($movimientos as $movimiento)
                                    <tr>
                                        <td class="px-6 py-2">{{ $movimiento->fecha }}</td>
                                        <td class="px-6 py-2">{{ $movimiento->concepto }}</td>
                                        <td class="px-6 py-2">{{ $movimiento->importa }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
