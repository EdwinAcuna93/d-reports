<?php

namespace App\Http\Controllers;

// use App\Publicacion;
use Illuminate\Http\Request;
use App\User;
use App\Publicacion;
use App\Http\Controllers\Controller;
// use DB;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return Publicacion::all();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        //
    }

    //Funcion para mostrar los datos de la tabla publicaciones
    public function mostrar(){
       $mostrar = Publicacion::all(); 
       return response()->json($mostrar);
       //return response()->json(['publicaciones'=>publicaciones::all()]);
    }
    //Funcion para eliminar datos de la tabla publicaciones
    public function eliminar($id){

        Role::find($id)->delete();
        return response()->json(['success'=>'Registro eliminado satisfactoriamente']);

    }

    public function modificar(){
        
    }
}
