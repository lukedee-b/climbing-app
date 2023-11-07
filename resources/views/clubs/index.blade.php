<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    Clubs
</h2>


@section('content')

<button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.create') }}">Create</a></button>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                    Number of Walls
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Facilities
                </th>
                <th scope="col" class="px-6 py-3">
                    Cafe
                </th>
            </tr>
        </thead>
        <tbody>
     @forelse($clubs as $club)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $club->name }}
            </th>
            <td class="px-6 py-4">
                {{ $club->location }}
            </td>
            <td class="px-6 py-4">
                {{ $club->number_of_walls }}
            </td>
            <td class="px-6 py-4">
                {{ $club->price }}
            </td>
            <td class="px-6 py-4">
                {{ $club->facilities }}
            </td>
            <td class="px-6 py-4">
                {{ $club->cafe }}
            </td>
            <td class="px-6 py-4">
                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.show', $club->id) }}">Options</a></button>
            </td>
        </tr>

        @empty
        <h4>No Clubs Found!</h4>
        @endforelse
    </tbody>
</table>
</x-slot>
</x-app-layout>