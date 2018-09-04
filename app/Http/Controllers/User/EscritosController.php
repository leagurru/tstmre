<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Modelos\User\Escrito;
use App\Http\Requests\CreateEscritoRequest;
use App\Modelos\Admin\Organismo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EscritosController extends Controller
{
    public function index()
    {
        $escritos = Escrito::paginate(10);

        return view('user.escritos.index',compact('escritos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organismos = Organismo::pluck('nombre','id')->all();
        $users = User::pluck('name','id')->all();
        return view('user.escritos.create', compact('organismos','users'));
    }

    public function store(CreateEscritoRequest $request)
    {
        Escrito::create($request->all());
        Session::flash('success', 'Registro creado');
        return redirect('/user/escritos');
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
        $escrito    =  Escrito::findOrFail($id);
        $organismos = Organismo::pluck('nombre','id')->all();
        $users   = User::pluck('name','id')->all();
        return view('user.escritos.edit',compact('escrito','organismos','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEscritoRequest $request, $id)
    {
        $escrito = Escrito::findOrFail($id);

        $escrito->update($request->all());
        Session::flash('success', 'El escrito ha sido actualizado');
        return redirect('/user/escritos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escrito = Edificio::findOrFail($id);
        $escrito->delete();
        Session::flash('success','El escrito ha sido borrado');
        return redirect('user.escritos');
    }


}
