
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
        <h3>Create Club</h3>

<form action="{{route('clubs.store') }}" method="post">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" id="name" />
        @if($errors->has('name'))
        <span> {{ $errors->first('name')}}
            @endif
    </div>
    <div>
        <label>Location</label>
        <input type="text" name="location" id="location" />
        @if($errors->has('location'))
        <span> {{ $errors->first('location')}}
            @endif
    </div>
    <div>
        <label>Number of walls</label>
        <input type="text" name="number_of_walls" id="number_of_walls" />
        @if($errors->has('number_of_walls'))
        <span> {{ $errors->first('number_of_walls')}}
            @endif
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" id="price" />
        @if($errors->has('price'))
        <span> {{ $errors->first('price')}}
            @endif
    </div>
    <div>
        <label>Facilites</label>
        <input type="text" name="facilites" id="facilites" />
        @if($errors->has('facilities'))
        <span> {{ $errors->first('facilities')}}
            @endif
    </div>
    <div>
        <label>Cafe</label>
        <input type="text" name="cafe" id="cafe" />
        @if($errors->has('cafe'))
        <span> {{ $errors->first('cafe')}}
            @endif
    </div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Create</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.index') }}">Back</button>

</form>
    </x-slot>
</x-app-layout>