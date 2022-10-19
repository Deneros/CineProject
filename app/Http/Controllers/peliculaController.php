<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Support\Facades\DB;

class peliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function index()
    {
        $peliculas = Pelicula::orderByDesc('id_pelicula')->get();
        return view('peliculas.list', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->movie_name);
        // $datos = $request->validate([
        //     'movie_name'=>'required|max:60',
        //     'description'=>'required|max:255',
        //     'movie_gender'=>'required|max:60',
        //     'price'=>'required|numeric|min:10000',
        //     'movie_room'=>'required|numeric|min:1',
        //     'movie_date'=>'required',   
        //     'poster'=>'required',   
        // ]);

        // $pelicula = Pelicula::create($datos);
        // return dd($pelicula);
        

        $pelicula = new Pelicula();
        $pelicula->nombre_pelicula = $request->movie_name;
        $pelicula->descripcion = $request->description;
        $pelicula->genero = $request->movie_gender;
        $pelicula->precio = $request->price;
        $pelicula->sala = $request->movie_room;
        $pelicula->fecha = $request->movie_date;
        $pelicula->poster = $request->poster;
        $pelicula->save();
        
        return redirect()->route('pelicula.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        // dd($pelicula);
        return view('peliculas.edit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $pelicula = DB::table('peliculas')->where('id_pelicula',$id)->update(['nombre_pelicula'=>$request->movie_name, 'descripcion'=>$request->description,'genero'=>$request->movie_gender,'precio'=>$request->price,'sala'=>$request->movie_room,'tipo'=>NULL,'fecha'=>$request->movie_date,'poster'=>$request->poster]);
        return redirect()->route('pelicula.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pelicula = DB::table('peliculas')->where('id_pelicula',$request->id)->delete();
        return redirect()->route('pelicula.list');
    }
}
