@extends('layouts.app')

@section('editpelicula')
<x-card-register>
    <form method="POST" action="{{ route('pelicula.update', $pelicula->id_pelicula) }}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Movie name')" />

            <x-text-input id="movie_name" class="block mt-1 w-full" type="text" name="movie_name" value="{{ $pelicula->nombre_pelicula }}" required autofocus />

            <x-input-error :messages="$errors->get('movie_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $pelicula->descripcion }}" required />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="movie_gender" :value="__('Movie gender')" />

            <x-text-input id="movie_gender" class="block mt-1 w-full" type="text" name="movie_gender" value="{{ $pelicula->genero }}" required />

            <x-input-error :messages="$errors->get('movie_gender')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Price')" />

            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ $pelicula->precio }}" required />

            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="room" :value="__('Movie room')" />

            <x-text-input id="movie_room" class="block mt-1 w-full" type="text" name="movie_room" value="{{ $pelicula->sala }}" required />

            <x-input-error :messages="$errors->get('movie_room')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="room" :value="__('Movie date')" />

            <x-text-input id="movie_date" class="block mt-1 w-full" type="date" name="movie_date" value="{{ $pelicula->fecha }}" required />

            <x-input-error :messages="$errors->get('movie_date')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="room" :value="__('URL from the picture')" />

            <x-text-input id="poster" class="block mt-1 w-full" type="text" name="poster" value="{{ $pelicula->poster }}" required />

            <x-input-error :messages="$errors->get('poster')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ml-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-card-register>

@endsection