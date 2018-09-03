<?php

namespace App\Http\Controllers;

use App\Edificio;
use App\Http\Requests\Admin\CreateOrganismoRequest;
use App\Organismo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $edificios = Edificio::pluck('direccion','id')->all();
        return view('admin.organismos.create', compact('edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrganismoRequest $request)
    {
//        $input = $request->validate([
//            'nombre' => 'required',
//            'edificio_id' => 'required',
//            'piso' => 'required|integer'
//        ]);

        Organismo::create($request->all());

        Session::flash('success', 'El organismo ha sido creado');

        return redirect()->back;
        //return redirect('/admin/organismos');
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

        return view('admin.organismos.edit',compact('organismo','edificios'));
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
        $organismo = Organismo::findOrFail($id);

        $input = $request->validate([
            'nombre' => 'required',
            'edificio_id' => 'required',
            'piso' => 'required|integer',
            'observaciones' => 'nullable'
        ]);

        $organismo->update($input);

        Session::flash('updated_organismo', 'El organismo ha sido actualizado');

        return redirect('/admin/organismos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organismo = Organismo::findOrFail($id);
        $organismo->delete();
        Session::flash('success','Registro borrado');

        return redirect('/admin/organismos');
    }
}
