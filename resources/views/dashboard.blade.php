<style>
    .menu{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 27px;
        height: 10px;
    }
    .menu li{
        border: 1px solid #000;
        padding: 15px;

        /* height: 30px; */
    }
    .menu li:hover{
        background-color: gray;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <ul class="menu">
                <li>
                    <a href="{{ route('pelicula.create') }}">Registrar Pelicula</a>
                </li>
                <li>
                    <a href="{{ route('pelicula.list') }}">Listar Peliculas</a>
                </li>
                <li>
                    <a href="{{ route('alimento.create') }}">Registrar Alimento</a>
                </li>
                <li>
                    <a href="{{ route('alimento.list') }}">Listar Alimento</a></h1>
                </li>
            </ul>
        </div>
    </x-slot>


</x-app-layout>