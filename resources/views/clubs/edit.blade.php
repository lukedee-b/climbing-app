
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">

<h3>Edit Club</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('clubs.update', $club->id ) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>

        <input type="text" name="name" id="name" value="{{ old('name')? : $club->name }}"/>

        @if($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="">Location</label>
        <input type="text" name="location" id="location" value="{{ old('location')? : $club->location }}"/>
        @if($errors->has('location'))
        <span>{{ $errors->first('location') }}</span>
        @endif
    </div>
    <div>
        <label for="">Number of Walls</label>
        <input type="text" name="number_of_walls" id="number_of_walls" value="{{ old('number_of_walls')? : $club->number_of_walls }}"/>
        @if($errors->has('number_of_walls'))
        <span>{{ $errors->first('number_of_walls') }}</span>
        @endif
    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name="price" id="price" value="{{ old('price')? : $club->price }}"/>
        @if($errors->has('price'))
        <span>{{ $errors->first('price') }}</span>
        @endif
    </div>
    <div>
        <label for="">Facilites</label>
        <input type="text" name="facilites" id="facilites" value="{{ old('facilites')? : $club->facilites }}"/>
        @if($errors->has('facilites'))
        <span>{{ $errors->first('facilites') }}</span>
        @endif
    </div>
    <div>
        <label for="">Cafe</label>
        <input type="text" name="cafe" id="cafe" value="{{ old('cafe')? : $club->cafe }}"/>
        @if($errors->has('cafe'))
        <span>{{ $errors->first('cafe') }}</span>
        @endif
    </div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800" type="submit">Create</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('clubs.index') }}">Back</button>

</form>

</x-slot>
</x-app-layout>