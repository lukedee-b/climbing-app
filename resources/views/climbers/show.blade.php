<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
<h1>Show Climber</h1>

<p>{{ $climber->name }}</p>
<h1>.</h1>

<h1>Coach</h1>
<p>{{ $climber->coach }}</p>
<h1>.</h1>
<h1>Level</h1>
<p>{{ $climber->level }}</p>
<h1>.</h1>
<h1>Club ID</h1>
<p>{{ $climber->club_id }}</p>

<div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"></a><a href="{{ route('climbers.edit', $climber->id) }}">Edit</a></button>

    <form method="POST" action="{{ route('climbers.destroy' , $climber->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Delete</button>
        </form>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('climbers.index') }}">Back</a></button>

    
</div>

</x-slot>
</x-app-layout>