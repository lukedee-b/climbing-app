@extends('layouts.admin')
    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Climber') }}
        </h2>
    @endsection

    @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form enctype="multipart/form-data" action="{{ route('admin.climbers.store') }}" method="post">
                    {{-- <form action="{{route('admin.climbers.store') }}" method="post"> --}}
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
                        name="coach"
                        field="coach"
                        placeholder="Coach"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('coach')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="level"
                        field="level"
                        placeholder="Level"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('level')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="club_id"
                        field="club_id"
                        placeholder="Club_id"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('club_id')"></x-text-input>


                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Create</button>
                <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.climbers.index') }}">Back</button>
            </form>
        </div>
    </div>
</div>
@endsection