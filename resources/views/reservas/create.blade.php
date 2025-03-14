<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Añadir reserva
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('reservas.store') }}" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                    <x-input-label for="dia_hora" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Fecha
                    </x-input-label>
                    <x-text-input name="dia_hora" type="text" id="dia_hora"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('dia_hora')" />
                    <x-input-error :messages="$errors->get('dia_hora')" class="mt-2" />


                    <x-input-label for="pista_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Pista_id
                    </x-input-label>
                    <x-text-input name="pista_id" type="text" id="pista_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('pista_id')" />
                    <x-input-error :messages="$errors->get('pista_id')" class="mt-2" />


                    <x-input-label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Usuario_id
                    </x-input-label>
                    <x-text-input name="user_id" type="text" id="user_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('user_id')" />
                    <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Crear
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
