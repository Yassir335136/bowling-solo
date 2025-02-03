<x-app-layout>
    <x-slot name="header" class="flex">

        <a href="/reservations/create" class="text-blue-500">create reservation</a>
    </x-slot>

    @isset($sucess)
        <p class="bg-green-500">$success</p>

    @endisset


    
    <div class="relative overflow-x-auto p-20 mt-60">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    startDatum
                </th>
                <th scope="col" class="px-6 py-3">
                    eindTijd
                </th>
                <th scope="col" class="px-6 py-3">
                    status
                </th>
                <th scope="col" class="px-6 py-3">
                    volwassenen
                </th>
                <th scope="col" class="px-6 py-3">
                    kinderen
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- foreachable --}}
            @foreach ($tabledata as $reservation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$reservation->fullName}}
                </th>
                <td class="px-6 py-4">
                    {{$reservation->startDateTime}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->endDateTime}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->reservationStatus}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->adultCount}}
                </td>
                <td class="px-6 py-4">
                    @if ($reservation->childrenCount > 0)
                        {{$reservation->childrenCount}}
                    @else
                        0                    
                    @endif
                </td>
                
                <td class="px-6 py-4 flex justify-around">
                    <a href="/reservations/{{$reservation->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="/reservations/{{$reservation->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">cancel</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>