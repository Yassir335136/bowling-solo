<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Bowling Banen') }}
            </h2>
            <a href="{{ route('rows.create') }}" class="px-3 py-2 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                + Baan Aanmaken
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    @if ($rows->isEmpty())
                        <p class="text-center">Er zijn bowling banen gevonden.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-800 text-xs">
                                <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-200 uppercase">
                                    <th class="py-2 px-3 text-left">Medewerker</th>
                                    <th class="py-2 px-3 text-left">Baan Naam</th>
                                    <th class="py-2 px-3 text-left">Hekken</th>
                                    <th class="py-2 px-3 text-left">VIP</th>
                                    <th class="py-2 px-3 text-left">Actief</th>
                                    <th class="py-2 px-3 text-left">Opmerking</th>
                                    <th class="py-2 px-3 text-left">Datum Aangemaakt</th>
                                    <th class="py-2 px-3 text-left">Datum Gewijzigd</th>
                                    <th class="py-2 px-3 text-left">Acties</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($rows as $row)
                                    <tr class="border-b border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="py-2 px-3">{{ $row->user->first_name }} {{ $row->user->last_name }}</td>
                                        <td class="py-2 px-3">{{ $row->name }}</td>
                                        <td class="py-2 px-3">{{ $row->HasFences ? 'Ja' : 'Nee' }}</td>
                                        <td class="py-2 px-3">{{ $row->IsVip ? 'Ja' : 'Nee' }}</td>
                                        <td class="py-2 px-3">{{ $row->IsActive ? 'Ja' : 'Nee' }}</td>
                                        <td class="py-2 px-3 truncate max-w-[150px]">{{ $row->comment }}</td>
                                        <td class="py-2 px-3">{{ $row->created_at->format('Y-m-d H:i') }}</td>
                                        <td class="py-2 px-3">{{ $row->updated_at->format('Y-m-d H:i') }}</td>
                                        <td class="py-2 px-3 flex space-x-2">
                                            <a href="{{ route('rows.show', $row->id) }}" class="text-green-500 hover:underline">Show</a>
                                            <a href="{{ route('rows.edit', $row->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                            <form action="{{ route('rows.destroy', $row->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">Verwijderen</button>
                                            </form>
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
