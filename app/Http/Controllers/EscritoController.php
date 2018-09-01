<?php

namespace App\Http\Controllers;

use App\Escrito;
use Illuminate\Http\Request;

class EscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escritos = Escrito::paginate(10);
        return view('escritos.index',compact('escritos'));
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
     * @param  \App\Escrito  $escrito
     * @return \Illuminate\Http\Response
     */
    public function show(Escrito $escrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escrito  $escrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Escrito $escrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escrito  $escrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escrito $escrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escrito  $escrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escrito $escrito)
    {
        //
    }
}
