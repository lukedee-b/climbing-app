<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="content">
<h3>Edit Route</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('admin.routes.update', $route->id ) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Grade</label>

        <input type="text" name="grade" id="grade" value="{{ old('grade')? : $route->grade }}"/>

        @if($errors->has('grade'))
            <span>{{ $errors->first('grade') }}</span>
        @endif
    </div>
    <div>
        <label for="">County</label>
        <input type="text" name="county" id="county" value="{{ old('county')? : $route->county }}"/>
        @if($errors->has('county'))
        <span>{{ $errors->first('county') }}</span>
        @endif
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" id="description" value="{{ old('description')? : $route->description }}"/>
        @if($errors->has('description'))
        <span>{{ $errors->first('description') }}</span>
        @endif
    </div>
    <div>
        <label for="">Style</label>
        <input type="text" name="style" id="style" value="{{ old('style')? : $route->style }}"/>
        @if($errors->has('style'))
        <span>{{ $errors->first('style') }}</span>
        @endif
    </div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.routes.index') }}">Back</button>

</form>
</x-slot>
</x-app-layout>