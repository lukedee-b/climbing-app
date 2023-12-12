@extends('layouts.admin')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Routes') }}
</h2>
@endsection

@section('content')
    
    {{-- <x-slot name="content"> --}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            
                            <img width="150" src={{ asset("storage/images" . $route->route_image) }} />
                            <p><b>Grade:</b> {{ $route->grade }}</p>
                            <p><b>County:</b> {{ $route->county }}</p>
                            <p><b>Description:</b> {{ $route->description }}</p>
                            <p><b>Style:</b> {{ $route->style }}</p>   

                        </div>
                        
                    </div>
                    <div>
                        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.routes.edit', $route->id) }}">Edit</a></button>
                    
                        <form method="POST" action="{{ route('admin.routes.destroy' , $route->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Delete</button>
                        </form>
                        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.routes.index') }}">Back</a></button>                
                    </div>
                </div>
            </div>
        </div>



@endsection