<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Bowling Banen') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">

                    <!-- Date Picker Form -->
                    <form action="{{ route('reservering.index') }}" method="GET" class="mb-4 flex justify-end items-center space-x-4">
                        <div class="flex items-center">
                            <label for="date" class="text-gray-600 dark:text-gray-400 mr-2">Kies een datum:</label>
                            <input type="date" name="date" id="date" class="px-4 py-2 rounded-md border border-gray-300 dark:border-gray-600 text-white bg-gray-700 dark:bg-gray-800" value="{{ request('date') }}">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 ml-2">Zoeken</button>
                        </div>
                    </form>

                    @php

                    $uitslagen = collect($uitslagen);

                    @endphp

                    @if ($uitslagen->isEmpty())
                        <p class="text-center">Er zijn geen uitslagen gevonden voor deze datum.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-800 text-xs">
                                <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-200 uppercase">
                                    <th class="py-2 px-3 text-left">Reserveringsnummer</th>
                                    <th class="py-2 px-3 text-left">Naam</th>
                                    <th class="py-2 px-3 text-left">Aantal Punten</th>
                                    <th class="py-2 px-3 text-left">Datum</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($uitslagen as $uitslag)
                                    <tr class="border-b border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td class="py-2 px-3">{{ $uitslag->spel->reservering->ReserveringsNummer }}</td>

                                        <td class="py-2 px-3">{{ $uitslag->spel->persoon->first_name }} {{ $uitslag->spel->persoon->last_name }}</td>

                                        <td class="py-2 px-3">{{ $uitslag->AantalPunten }}</td>

                                        <td class="py-2 px-3">{{ \Carbon\Carbon::parse($uitslag->spel->reservering->Datum)->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
