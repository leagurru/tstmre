<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modelos\Admin\Mre;
use App\Modelos\Admin\Organismo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mres = Mre::paginate(10);
        return view('admin.mres.index',compact('mres'));
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
            'organismo_id' => 'required'
        ]);

        Mre::create($input);
        Session::flash('created_mre', 'La MRE ha sido creada');

        return redirect('/admin/mres');
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

//    public function showOrganismosMesa($id){
//        $organismosMesa = Organismo::where('role_id',$request->roleid)->pluck('name','id');
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mre = Mre::findOrFail($id);
        $organismos = Organismo::pluck('nombre','id')->all();
        return view('admin.mres.edit', compact('mre','organismos'));
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
        $mre = Mre::findOrFail($id);

        $input = $request->validate([
            'organismo_id' => 'required'
        ]);

        $mre->update($input);
        Session::flash('updated_mre', 'La MRE ha sido actualizada');
        return redirect('/admin/mres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mre = Mre::findOrFail($id);
        $mre->delete();
        Session::flash('deleted_mre','La MRE ha sido borrada');
        return redirect('admin/mres');
    }
}
