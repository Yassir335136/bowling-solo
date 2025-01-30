<!-- resources/views/rows/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Row Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 text-white bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if($row)
                        <div class="space-y-4">
                            <p><strong>Medewerker:</strong> {{ $row->user->first_name }} {{ $row->user->last_name }}</p>
                            <p><strong>Baan Naam:</strong> {{ $row->name }}</p>
                            <p><strong>Hekken:</strong> {{ $row->HasFences ? 'Ja' : 'Nee' }}</p>
                            <p><strong>VIP Status:</strong> {{ $row->IsVip ? 'Ja' : 'Nee' }}</p>
                            <p><strong>Actief:</strong> {{ $row->IsActive ? 'Ja' : 'Nee' }}</p>
                            <p><strong>Datum Aangemaakt:</strong> {{ $row->created_at->format('M d, Y H:i') }}</p>
                            <p><strong>Datum Gewijzigd:</strong> {{ $row->updated_at->format('M d, Y H:i') }}</p>
                        </div>

                        <!-- Go Back Button -->
                        <div class="mt-4">
                            <a href="{{ route('rows.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 rounded-md">
                                &larr; Go Back
                            </a>
                        </div>

                    @else
                        <p>Rij niet gevonden.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
