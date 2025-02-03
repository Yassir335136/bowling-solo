<x-app-layout>
    <x-slot name="header" class="flex">

        <a href="/reserves/create" class="text-blue-500">create reserving</a>
    </x-slot>

    @isset($success)
        <p class="bg-green-500">{{$success}}</p>

    @endisset
        @isset($fail)
        <p class="bg-red-500">{{$fail}}</p>

    @endisset
  
    <div class="relative overflow-x-auto p-20 mt-60">
        <div class="flex w-full">
            <h1 class=" text-gray-50 px-10 text-4xl font-bold">Reservings van {{Auth::user()->first_name}}</h1>
                <form action="{{ action('\App\Http\Controllers\FilterController@filterDate') }}" method="POST" class="p-1">
                    @csrf
                    <input type="date" name="date">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show reservings</button>
                </form>
        </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    naam
                </th>
                <th scope="col" class="px-6 py-3">
                    datum
                </th>
                <th scope="col" class="px-6 py-3">
                    totalHours
                </th>
                <th scope="col" class="px-6 py-3">
                    starttijd
                </th>
                <th scope="col" class="px-6 py-3">
                    eindtijd
                </th>
                <th scope="col" class="px-6 py-3">
                    volwassenen
                </th>
                <th scope="col" class="px-6 py-3">
                    kinderen
                </th>
                <th scope="col" class="px-6 py-3">
                    baan
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actie
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- foreachable --}}
            @foreach ($tabledata as $reserve)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$reserve->personName}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{$reserve->date}}
                </th>
                <td class="px-6 py-4">
                    {{$reserve->totalHours}}
                </td>
                <td class="px-6 py-4">
                    {{$reserve->startTime}}
                </td>
                <td class="px-6 py-4">
                    {{$reserve->endTime}}
                </td>
                <td class="px-6 py-4">
                    {{$reserve->totalAdults}}
                </td>
                <td class="px-6 py-4">
                    @if ($reserve->totalChildren > 0)
                        {{$reserve->totalChildren}}
                    @else
                        0                    
                    @endif
                </td>
                <td class="px-6 py-4">
                    baan: {{$reserve->Alley->Number}}
                </td>
                 <td class="px-6 py-4 flex justify-around">
                    <a href="/reservings/{{$reserve->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Kies andere baan</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>