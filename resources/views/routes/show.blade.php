<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h1>Show Route</h1>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                            
                            <p><b>Grade:</b> {{ $route->grade }}</p>
                            <p><b>County:</b> {{ $route->county }}</p>
                            <p><b>Description:</b> {{ $route->description }}</p>
                            <p><b>Style:</b> {{ $route->style }}</p>   
                            
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    </div>
                </div>
            </div>
        </div>

<div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('routes.edit', $route->id) }}">Edit</a></button>

    <form method="POST" action="{{ route('routes.destroy' , $route->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Delete</button>
    </form>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('routes.index') }}">Back</a></button>

    
</div>

</x-slot>
</x-app-layout>