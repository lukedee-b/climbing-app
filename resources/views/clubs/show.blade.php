
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">

<p>{{ $club->name }}</p>
<h1> .</h1>
<h1>location:</h1><p>{{ $club->location }}</p>
<h1> .</h1>

<h1>Number of walls:</h1>
<p>{{ $club->number_of_walls }}</p>
<h1> .</h1>

<h1>Price:</h1>
<p>{{ $club->price }}</p>
<h1> .</h1>

<h1>Facilities:</h1>
<p>{{ $club->facilities }}</p>
<h1> .</h1>

<h1>Cafe:</h1>
<p>{{ $club->cafe }}</p>


<div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.edit', $club->id) }}">Edit</a></button>

    <form method="POST" action="{{ route('clubs.destroy' , $club->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.index') }}">Delete</button>
    </form>
            <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.index') }}">Back</a></button>
</div>

</x-slot>
</x-app-layout>