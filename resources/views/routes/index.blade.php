<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    Routes
</h2>


@section('content')

<button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('routes.create') }}">Create</a></button>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Grade
                </th>
                <th scope="col" class="px-6 py-3">
                    County
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Style
                </th>
            </tr>
        </thead>
        <tbody>
     @forelse($routes as $route)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $route->grade }}
            </th>
            <td class="px-6 py-4">
                {{ $route->county }}
            </td>
            <td class="px-6 py-4">
                {{ $route->description }}
            </td>
            <td class="px-6 py-4">
                {{ $route->style }}
            </td>
            <td class="px-6 py-4">
                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('routes.show', $route->id) }}">Options</a></button>
            </td>
        </tr>

        @empty
        <h4>No Routes Found!</h4>
        @endforelse
    </tbody>
</table>
</x-slot>
</x-app-layout>