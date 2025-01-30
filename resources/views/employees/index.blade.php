<x-app-layout>
    @isset($sucess)
        <p class="bg-green-500">$success</p>
        
    @endisset
    <div class="relative overflow-x-auto p-20 mt-60">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    isactive
                </th>
                <th scope="col" class="px-6 py-3">
                    role
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- foreachable --}}
            @foreach ($tabledata as $employee)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$employee->id}}
                </th>
                <td class="px-6 py-4">
                    {{$employee->first_name}}
                </td>
                <td class="px-6 py-4">
                    {{$employee->email}}
                </td>
                <td class="px-6 py-4">
                    @if ($employee->IsActive == 1)
                        true
                    @else
                        false
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{$employee->role}}
                </td>
                
                <td class="px-6 py-4 flex justify-around">
                    <a href="/employees/{{$employee->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="/employees/{{$employee->id}}" method="post">
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