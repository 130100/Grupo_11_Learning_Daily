<?php

namespace App\Http\Controllers;

use App\Models\Gestiones;
use Illuminate\Http\Request;

class GestionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['gestiones']=Gestiones::paginate(24);
        return view('Gestiones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Gestiones.gestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosGestiones=request()->except('_token');
        Gestiones::insert($datosGestiones);
        return response()->json($datosGestiones);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestiones  $gestiones
     * @return \Illuminate\Http\Response
     */
    public function show(Gestiones $gestiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestiones  $gestiones
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestiones $gestiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gestiones  $gestiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestiones $gestiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestiones  $gestiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestiones $gestiones)
    {
        //
    }
}
