<x-app-layout>
  <section class="bg-white dark:bg-gray-900 p-20 mt-60">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Nieuwe medewerker</h2>
        <form action="/employees/{{$employee->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-1">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">voornaam</label>
                    <input value="{{$employee->first_name}}" type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    @error('first_name')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
                <div class="sm:col-span-1">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">achternaam</label>
                    <input value="{{$employee->last_name}}" type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    @error('last_name')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                    <input value="{{$employee->email}}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    @error('email')
                        <p class="bg-red-500 text-white">{{$message}}</span>
                    @enderror
                </div>

                <div class="sm:col-span-1">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">wachtwoord</label>
                    <input disabled type="password"  id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        <p class="bg-red-500 text-white">cant change users password</span>
                </div>

                <div class="sm:col-span-1">
                    <label for="password_repeated" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">herhaal wachtwoord</label>
                    <input disabled type="password"  id="password_repeated" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                        <p class="bg-red-500 text-white">can't change users password</span>
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                voeg medewerker toe
            </button>
        </form>
    </div>
  </section>
</x-app-layout>