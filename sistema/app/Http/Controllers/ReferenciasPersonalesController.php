<?php

namespace App\Http\Controllers;

use App\Models\ReferenciasPersonales;
use Illuminate\Http\Request;

class ReferenciasPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ReferenciasPersonales.referencias_personales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosreferencia = request()->except('_token');
        ReferenciasPersonales::insert($datosreferencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReferenciasPersonales  $referenciasPersonales
     * @return \Illuminate\Http\Response
     */
    public function show(ReferenciasPersonales $referenciasPersonales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReferenciasPersonales  $referenciasPersonales
     * @return \Illuminate\Http\Response
     */
    public function edit(ReferenciasPersonales $referenciasPersonales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReferenciasPersonales  $referenciasPersonales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReferenciasPersonales $referenciasPersonales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReferenciasPersonales  $referenciasPersonales
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReferenciasPersonales $referenciasPersonales)
    {
        //
    }
}
