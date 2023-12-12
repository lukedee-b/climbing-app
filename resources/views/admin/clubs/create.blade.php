@extends('layouts.admin')
    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Club') }}
        </h2>
    @endsection

    @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form enctype="multipart/form-data" action="{{ route('admin.clubs.store') }}" method="post">
                    {{-- <form action="{{route('admin.clubs.store') }}" method="post"> --}}
                        @csrf
                        <x-text-input
                        type="text"
                        name="name"
                        field="name"
                        placeholder="Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('name')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="location"
                        field="location"
                        placeholder="Location"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('location')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="number_of_walls"
                        field="number_of_walls"
                        placeholder="Number of walls"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('number_of_walls')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="price"
                        field="price"
                        placeholder="Price"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('price')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="facilities"
                        field="facilities"
                        placeholder="Facilities"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('facilities')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="cafe"
                        field="cafe"
                        placeholder="Cafe"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('cafe')"></x-text-input>


                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Create</button>
                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.clubs.index') }}">Back</button>
            </form>
        </div>
    </div>
</div>
@endsection