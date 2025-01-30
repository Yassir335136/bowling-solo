<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Overzicht Uitslagen') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    @if ($uitslagen->isEmpty())
                        <p class="text-center">Er zijn geen uitslagen gevonden...</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-800 text-xs">
                                <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-200 uppercase">
                                    <th class="py-2 px-3 text-left">Naam</th>
                                    <th class="py-2 px-3 text-left">Score</th>
                                    <th class="py-2 px-3 text-left">Wijzigen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($uitslagen as $uitslag)
                                    <tr class="border-b border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <!-- Display the first and last name of the person -->
                                        <td class="py-2 px-3">{{ $uitslag->spel->persoon->first_name }} {{ $uitslag->spel->persoon->last_name }}</td>

                                        <!-- Display the score -->
                                        <td class="py-2 px-3">{{ $uitslag->AantalPunten }}</td>

                                        <!-- Action buttons for Show, Edit, Delete (if you want to implement them) -->
                                        <td class="py-2 px-3 flex space-x-2">
                                            <a href="{{ route('uitslag.edit', $uitslag->id) }}" class="text-blue-500 hover:underline">Wijzigen</a>
                                        </td>
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
