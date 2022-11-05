<?php

namespace App\Http\Controllers;

use App\Models\Cooperativa;
use Illuminate\Http\Request;

class CooperativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['cooperativa']=Cooperativa::paginate(5);
        return view('Cooperativa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cooperativa.cooperativa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCooperativa = request()->except('_token');
        if($request->hasFile('firma'))
        {
            $datosCooperativa['firma']=$request->file('firma')->store('uploads','public');
        }
        Cooperativa::insert($datosCooperativa);
        return response()->json($datosCooperativa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cooperativa  $cooperativa
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperativa $cooperativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperativa  $cooperativa
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperativa $cooperativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooperativa  $cooperativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperativa $cooperativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cooperativa  $cooperativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperativa $cooperativa)
    {
        //
    }
}
