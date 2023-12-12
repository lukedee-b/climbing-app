
@extends('layouts.admin')
    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Route') }}
        </h2>
    @endsection

    @section('content')
{{-- {{print_r($errors)}} --}}
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form enctype="multipart/form-data" action="{{ route('admin.routes.store') }}" method="post">
            {{-- <frm action="{{route('admin.routes.store') }}" method="post"> --}}
                @csrf
                <x-text-input
                    type="text"
                    name="grade"
                    field="grade"
                    placeholder="Grade"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('grade')"></x-text-input>

                    <x-text-input
                    type="text"
                    name="county"
                    field="county"
                    placeholder="County"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('county')"></x-text-input>

                    <textarea
                        name="description"
                        rows="2"
                        field="description"
                        placeholder="Description..."
                        class="w-full mt-6"
                        :value="@old('description')"></textarea>

                        <x-text-input
                        type="text"
                        name="style"
                        field="style"
                        placeholder="Style"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('style')"></x-text-input>

                        <input
                        type="file"
                        name="route_image"
                        placeholder="Route image"
                        class="w-full mt-6"
                        field="route_image"
                    />

                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Create</button>
                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.routes.index') }}">Back</button>

            </form>
        </div>
    </div>
</div>
@endsection