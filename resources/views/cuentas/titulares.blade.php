<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Titulares') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>
                        @if ($clientes->isEmpty())
                            <a href="">La cuenta {{$cuenta->numero}} no tiene titulares</a>
                            @else
                            <table class="table-auto">
                                <thead>
                                    <th class="px-6 py-2 text-gray-500">
                                        Dni
                                    </th>
                                    <th class="px-6 py-2 text-gray-500">
                                        Nombre
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td class="px-6 py-2">{{ $cliente->dni }}</td>
                                            <td class="px-6 py-2">{{ $cliente->nombre }}</td>
                                            <td>
                                                <div class="text-sm text-gray-900 ">
                                                    <form action="{{ route('cuentas.quitartitular', [$cuenta, $cliente]) }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Quitar titular</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
