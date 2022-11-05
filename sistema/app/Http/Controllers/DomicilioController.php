<?php

namespace App\Http\Controllers;

use App\Models\domicilio;
use Illuminate\Http\Request;

class DomicilioController extends Controller
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
        return view('vistaDomicilio.domicilio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosdomicilio=request()->except('_token');
        domicilio::insert($datosdomicilio);
        return response()->json($datosdomicilio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(domicilio $domicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(domicilio $domicilio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, domicilio $domicilio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(domicilio $domicilio)
    {
        //
    }
}
