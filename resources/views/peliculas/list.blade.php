@extends('layouts.app')




@section('pelicula')

<div class="flex flex-row">
    @foreach ($peliculas as $key => $pelicula)
    <div class="flex flex-row">
        <div class="w-full flex flex-col sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" style="height: 150px !important;" src="{{ ($pelicula->poster) }}" alt="Poster">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $pelicula->nombre_pelicula }}</div>
                    <p><small>Genero : {{$pelicula->genero}}</small></p>
                    <p><small>Sala:{{$pelicula->sala}}, Precio:{{$pelicula->precio}}</small></p>
                    <p class="text-gray-700 text-base" style="overflow: scroll;height:100px;overflow-x:hidden">
                        {{ $pelicula->descripcion}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection