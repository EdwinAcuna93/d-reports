<?php

namespace App\Http\Controllers;

use App\Modelos\com_publicaciones;
use Illuminate\Http\Request;

class ComPublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return com_publicaciones::all();
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
     * @param  \App\com_publicaciones  $com_publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(com_publicaciones $com_publicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\com_publicaciones  $com_publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(com_publicaciones $com_publicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\com_publicaciones  $com_publicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, com_publicaciones $com_publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\com_publicaciones  $com_publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(com_publicaciones $com_publicaciones)
    {
        //
    }
}
