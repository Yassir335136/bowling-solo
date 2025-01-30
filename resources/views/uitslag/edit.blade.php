<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Uitslag') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-lg mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('uitslag.update', $uitslag->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Display Name (Non-editable) -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Naam</label>
                        <input type="text"
                               value="{{ $uitslag->spel->persoon->first_name }} {{ $uitslag->spel->persoon->last_name }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>

                    <div class="mb-4">
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Reserveringsnummer</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->ReserveringsNummer }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Aantal
                            Kinderen</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->AantalKinderen }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Aantal
                            Volwassen</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->AantalVolwassen }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Datum</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->Datum }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Aantal Uren</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->AantalUren }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Begin Tijd</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->BeginTijd }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>


                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Eind Tijd Tijd</label>
                        <input type="text" value="{{ $uitslag->spel->reservering->EindTijd }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" disabled/>
                    </div>


                    <!-- Editable Points -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Aantal Punten</label>
                        <input type="number" name="AantalPunten"
                               value="{{ old('AantalPunten', $uitslag->AantalPunten) }}"
                               class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" required/>
                        @error('AantalPunten') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('uitslag.showall') }}"
                           class="px-4 py-2 text-sm bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</a>
                        <button type="submit"
                                class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
