<x-app-layout>
  <section class="bg-white dark:bg-gray-900 p-20 mt-60">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">kies een andere baan</h2>
        <form action="/reservings/{{$reserving->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="alleyId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kies een baan</label>
                    <select id="alleyId" name="alleyId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @foreach ($alleys as $alley)
                            <option {{$alley->id == $reserving->alleyId ? 'selected' : ''}} value="{{$alley->id}}">Baan {{$alley->Number}}{{$alley->HasFences ? ': kidsalley' : ''}} </option>
                        @endforeach
                    </select>
                    @error('alleyId')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                reservatie opslaan
            </button>
        </form>
    </div>
  </section>
</x-app-layout>