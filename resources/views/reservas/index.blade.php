<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Reservas
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-x-20">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Día y hora
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Pista_id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Usuario_id
                                        </th>

                                </thead>
                                <tbody>
                                    @foreach ($reservas as $reserva)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reserva->dia_hora }}
                                            </th>
                                            <td class="px-6 py-4">

                                                {{ $reserva->pista_id }}
                                            </td>
                                            <td class="px-6 py-4">

                                                {{ $reserva->user_id }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <form method="POST" action="{{ route('reservas.destroy', $reserva) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('reservas.destroy', $reserva) }}"
                                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
                                                        onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">
                                                        Eliminar
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
