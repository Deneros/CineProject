@extends('layouts.app')

@section('alimento')
<x-card-register>
    <form method="POST" action="{{ route('alimento.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Food name')" />

            <x-text-input id="food_name" class="block mt-1 w-full" type="text" name="food_name" :value="old('food_name')" required autofocus />

            <x-input-error :messages="$errors->get('food_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="food_price" :value="__('Food Price')" />

            <x-text-input id="food_price" class="block mt-1 w-full" type="number" name="food_price" :value="old('food_price')" required />

            <x-input-error :messages="$errors->get('food_price')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-card-register>

@endsection