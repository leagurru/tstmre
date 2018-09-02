<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Organismo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organismos = Organismo::pluck('nombre','id')->all();
        return view('admin.users.create', compact('organismos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    public function store(UsersRequest $request)
    {
        if (trim($request->password) == '') {
//            $input = $request->except(('password'));
                $input = $request->validate([
                'organismo_id' => 'required',
                'name' => 'required',
                'email' => 'required|email'
            ]);
        } else {
//            $input = $request->all();
            $input = $request->validate([
                'organismo_id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $input['password'] = bcrypt($request->password);
        }

        User::create($input);
        Session::flash('created_user', 'El usuario ha sido creado');

        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $organismos = Organismo::pluck('nombre','id')->all();
        return view('admin.users.edit',compact('user','organismos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

    public function update(UsersEditRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if (trim($request->password) == '') {
            $input = $request->except(('password'));
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }


        $user->update($input);

        Session::flash('updated_user', 'El usuario ha sido actualizado');

        return redirect('/admin/users');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('deleted_user','El usuario ha sido borrado');

        return redirect('/admin/users');
    }
}
