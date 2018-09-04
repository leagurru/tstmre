<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modelos\Admin\Edificio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EdificiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edificios = Edificio::paginate(10);
        return view('admin.edificios.index',compact('edificios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edificios.create', compact('edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'direccion' => 'required'
        ]);

        Edificio::create($input);
        Session::flash('created_edificio', 'El edificio ha sido creado');

        return redirect('/admin/edificios');
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
        $edificio =  Edificio::findOrFail($id);
        return view('admin.edificios.edit',compact('edificio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edificio = Edificio::findOrFail($id);

        $input = $request->validate([
            'direccion' => 'required'
        ]);

        $edificio->update($input);
        Session::flash('updated_edificio', 'El edificio ha sido actualizado');
        return redirect('/admin/edificios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edificio = Edificio::findOrFail($id);
        $edificio->delete();
        Session::flash('deleted_edificio','El edificio ha sido borrado');
        return redirect('admin/edificios');
    }
}
