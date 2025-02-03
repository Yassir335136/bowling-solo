<x-app-layout>
  <section class="bg-white dark:bg-gray-900 p-20 mt-60">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Nieuwe reservatie</h2>
        <form action="/reservations" method="POST">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="startDateTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">start datum</label>
                    <input type="datetime-local" name="startDateTime" id="startDateTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    @error('startDateTime')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="endDateTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">eind datum</label>
                    <input type="datetime-local" name="endDateTime" id="endDateTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    @error('endDateTime')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="rowId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kies een baan</label>
                    <select name="rowId"  id="rowId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select categorie</option>
                        @foreach ($rows as $row)
                        <option value={{$row->id}}>BaanNummer {{$row->id}}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="bundleOption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kies een bundel</label>
                    <select name="bundleOption" id="bundleOption" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select categorie</option>
                        <option value="basis">snackpakket basis</option>
                        <option value="luxe">snackpakket luxe</option>
                        <option value="Kinderpartij">kinderpartij</option>
                        <option value="Vrijgezellenfeest">vrijgezellenfeest</option>
                    </select>
                    @error('bundleOption')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="rowId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kies een bundel</label>
                    <select id="rowId" name="rowId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @foreach ($rows as $row)
                            <option value="{{$row->id}}">baannummber {{$row->id}}</option>
                        @endforeach
                    </select>
                    @error('rowId')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
               
                <div class="w-full">
                    <label for="adultCount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">aantal volwassenen</label>
                    <input min=1 max=8 type="number" name="adultCount" id="adultCount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="value3" value=1 required="">
                    @error('adultCount')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="childrenCount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">aantal kinderen</label>
                    <input min=0 max=4 type="number" name="childrenCount" id="childrenCount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="value3" value=0 required="">
                    @error('childrenCount')
                        <p class="bg-red-500 text-white">{{$message}}</span> 
                    @enderror
                </div>

            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Add reservatie
            </button>
            @foreach ($errors as $error)
                <p>$error->message</p>
            @endforeach
        </form>
    </div>
  </section>
</x-app-layout>