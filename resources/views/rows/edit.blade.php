<!-- resources/views/rows/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Row') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-lg mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('rows.update', $row->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Baan Naam</label>
                        <input name="name" class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" value="{{ old('name', $row->name) }}" />
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Hekken</label>
                        <select name="HasFences" class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" required>
                            <option value="1" {{ old('HasFences', $row->HasFences) == 1 ? 'selected' : '' }}>Ja</option>
                            <option value="0" {{ old('HasFences', $row->HasFences) == 0 ? 'selected' : '' }}>Nee</option>
                        </select>
                        @error('HasFences') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">VIP</label>
                        <select name="IsVip" class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" required>
                            <option value="1" {{ old('IsVip', $row->IsVip) == 1 ? 'selected' : '' }}>Ja</option>
                            <option value="0" {{ old('IsVip', $row->IsVip) == 0 ? 'selected' : '' }}>Nee</option>
                        </select>
                        @error('IsVip') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Is Actief</label>
                        <select name="IsActive" class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" required>
                            <option value="1" {{ old('IsActive', $row->IsActive) == 1 ? 'selected' : '' }}>Ja</option>
                            <option value="0" {{ old('IsActive', $row->IsActive) == 0 ? 'selected' : '' }}>Nee</option>
                        </select>
                        @error('IsActive') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Opmerking</label>
                        <textarea name="comment" class="w-full mt-1 p-2 border rounded dark:bg-gray-700 dark:text-white" rows="3" maxlength="255">{{ old('comment', $row->comment) }}</textarea>
                        @error('comment') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('rows.index') }}" class="px-4 py-2 text-sm bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</a>
                        <button type="submit" class="px-4 py-2 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
