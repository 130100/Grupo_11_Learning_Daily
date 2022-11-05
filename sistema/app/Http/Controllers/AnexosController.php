<?php

namespace App\Http\Controllers;

use App\Models\Anexos;
use Illuminate\Http\Request;

class AnexosController extends Controller
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
        return view('vistaAnexos.anexos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosanexos=request()->except('_token');
        Anexos::insert($datosanexos);
        return response()->json($datosanexos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anexos  $anexos
     * @return \Illuminate\Http\Response
     */
    public function show(Anexos $anexos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anexos  $anexos
     * @return \Illuminate\Http\Response
     */
    public function edit(Anexos $anexos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anexos  $anexos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anexos $anexos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anexos  $anexos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anexos $anexos)
    {
        //
    }
}
