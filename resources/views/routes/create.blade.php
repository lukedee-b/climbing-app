
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
<h3>Create Route</h3>
{{print_r($errors)}}

<form action="{{route('routes.store') }}" method="post">
    @csrf
    <div>
        <label>Grade</label>
        <input type="text" name="grade" id="grade" />
        @if($errors->has('grade'))
        <span> {{ $errors->first('grade')}}
            @endif
    </div>
    <div>
        <label>County</label>
        <input type="text" name="county" id="county" />
        @if($errors->has('county'))
        <span> {{ $errors->first('county')}}
            @endif
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" id="description" />
        @if($errors->has('description'))
        <span> {{ $errors->first('description')}}
            @endif
    </div>
    <div>
        <label>Style</label>
        <input type="text" name="style" id="style" />
        @if($errors->has('style'))
        <span> {{ $errors->first('style')}}
            @endif
    </div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Create</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('routes.index') }}">Back</button>

</form>
</x-slot>
</x-app-layout>