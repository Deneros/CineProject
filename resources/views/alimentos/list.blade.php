@extends('layouts.app')

@section('listalimento')


<style>
    .btn{
        background-color: white;
        border-radius: 3px;
        padding: 2px;
        margin-top: 2%;
    }
</style>
<br><br>
<div class="flex flex-row">
    @foreach ($alimentos as $key => $alimento)
    <div class="w-full flex flex-col sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
        <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$alimento->nombre_alimento}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$alimento->descripcion_alimento}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Precio : {{$alimento->valor_alimento}}</p>
            <form action="{{ route('compra.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_alimento" value="{{ $alimento->id_alimento }}">
                <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
                <button type="submit" class="btn">Comprar</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection