@extends('layouts.app')

<style>
    .container-btn {
        /* display: flex;
        justify-content: space-around; */
        margin-left: 10%;
    }

    .btn {
        margin: auto;
        border: 1px solid red;
        padding: 5px;
        border-radius: 3px;
        background-color: red;
        color: white
    }

    .txt-area {
        overflow: scroll;
        height: 100px;
        overflow-x: hidden
    }
    .btn-a{
        border: 1px solid blue;
        background-color: blue;
        color: white;
        padding: 6px;
        border-radius: 3px;

    }
</style>


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
                    <p class="text-gray-700 text-base txt-area">
                        {{ $pelicula->descripcion}}
                    </p>
                </div>
                <form action="{{ route('pelicula.destroy') }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $pelicula->id_pelicula }}">
                    <div class="container-btn">
                        <button class="btn">
                            Eliminar
                        </button>
                        <a href="{{ route('pelicula.edit', $pelicula->id_pelicula) }}" class="btn-a">Edit</a>
                    </div>
                </form>


            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection