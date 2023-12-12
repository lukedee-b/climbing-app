
@extends('layouts.admin')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Climbers') }}
</h2>
@endsection


@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('admin.climbers.update', $climber->id ) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>

        <input type="text" name="name" id="name" value="{{ old('name')? : $climber->name }}"/>

        @if($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="">Coach</label>
        <input type="text" name="coach" id="coach" value="{{ old('coach')? : $climber->coach }}"/>
        @if($errors->has('coach'))
        <span>{{ $errors->first('coach') }}</span>
        @endif
    </div>
    <div>
        <label for="">Level</label>
        <input type="text" name="level" id="level" value="{{ old('level')? : $climber->level }}"/>
        @if($errors->has('level'))
        <span>{{ $errors->first('level') }}</span>
        @endif
    </div>
    <div>
        <label for="">Club_id</label>
        <input type="text" name="club_id" id="club_id" value="{{ old('club_id')? : $climber->club_id }}"/>
        @if($errors->has('club_id'))
        <span>{{ $errors->first('club_id') }}</span>
        @endif
    </div>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.climbers.index') }}">Back</button>
</form>

@endsection