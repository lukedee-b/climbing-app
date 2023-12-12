<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Climbers
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Coach
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Level
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Club_id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Routes Completed
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                    @forelse($climbers as $climber)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $climber->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $climber->coach }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $climber->level }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $climber->club->name }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach($climber->routes as $routes)
                                {{ $routes->id }}
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('user.climbers.show', $climber->id) }}">More</a></button>
                            </td>
                        </tr>

                            @empty
                            <h4>No Climbers Found!</h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>