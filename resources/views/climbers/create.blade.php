<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">


<h3>Create Climber</h3>


<form action="{{route('climbers.store') }}" method="post">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" id="name" />
        @if($errors->has('name'))
        <span> {{ $errors->first('name')}}
            @endif
    </div>
    <div>
        <label>Coach</label>
        <input type="text" name="coach" id="coach" />
        @if($errors->has('coach'))
        <span> {{ $errors->first('coach')}}
            @endif
    </div>
    <div>
        <label>Level</label>
        <input type="text" name="level" id="level" />
        @if($errors->has('level'))
        <span> {{ $errors->first('level')}}
            @endif
    </div>
    <div>
        <label>Club_id</label>
        <input type="text" name="club_id" id="club_id" />
        @if($errors->has('club_id'))
        <span> {{ $errors->first('club_id')}}
            @endif
    </div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800" type="submit">Create</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('climbers.index') }}">Back</button>
</form>
</x-slot>
</x-app-layout>