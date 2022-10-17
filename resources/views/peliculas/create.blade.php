@extends('layouts.app')

@section('contenido')
<x-card-register>
    <form method="POST" action="{{ route('pelicula.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Movie name')" />

            <x-text-input id="name_movie" class="block mt-1 w-full" type="text" name="name_movie" :value="old('name_movie')" required autofocus />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="movie_gender" :value="__('Movie gender')" />

            <x-text-input id="movie_gender" class="block mt-1 w-full" type="text" name="movie_gender" :value="old('movie_gender')" required />

            <x-input-error :messages="$errors->get('movie_gender')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Price')" />

            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />

            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="room" :value="__('Movie room')" />

            <x-text-input id="movie_room" class="block mt-1 w-full" type="text" name="movie_room" :value="old('movie_room')" required />

            <x-input-error :messages="$errors->get('movie_room')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="room" :value="__('Movie date')" />

            <x-text-input id="movie_date" class="block mt-1 w-full" type="date" name="movie_date" :value="old('movie_date')" required />

            <x-input-error :messages="$errors->get('movie_date')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-file-input id="poster" class="block mt-1 w-full" type="file" name="poster" :value="old('poster')" required />

            <x-input-error :messages="$errors->get('poster')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-card-register>

@endsection