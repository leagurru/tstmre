<?php

namespace App\Http\Controllers;

use App\Edificio;
use App\Organismo;
use Illuminate\Http\Request;

class AdminOrganismosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organismos = Organismo::paginate(10);
        return view('admin.organismos.index',compact('organismos'));
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
    public function edit($id)
    {
        $organismo = Organismo::findOrFail($id);
        $edificios = Edificio::pluck('direccion','id')->all();

        return view('admin.users.edit',compact('organismo','edificios'));
    }

//    public function edit($id)
//    {
//        $user = User::findOrFail($id);
//        $organismos = Organismo::pluck('nombre','id')->all();
//        return view('admin.users.edit',compact('user','organismos'));
//    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
