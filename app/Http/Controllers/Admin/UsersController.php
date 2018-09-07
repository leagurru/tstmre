<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Modelos\Admin\Organismo;
use App\Modelos\Admin\User;
//use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        dd($request->get('name'));

//                dd($request);
//        dd($request->get('name') . $request->get('email'));

        $name  = $request->get('name');
        $email = $request->get('email');

//        $users = User::name($request->get('name'))->orderBy('id','DESC')->paginate(10);

//        $users = User::orderBy('id','DESC')->name($name)->email($email)->paginate(10);

                $users = User::name($name)->email($email)->orderBy('id','DESC')->paginate(10);

//        $users = User::orderBy('id','DESC')
//            ->name($name)
//            ->paginate(10);

//        $users = User::name($name)->email($email)->paginate(10);

//        return View::make('admin.users.index',compact('users'));;

        return view('admin.users.index',compact('users'));
//        return view('admin.users.index', ['users' => $users]);

    }


//    public function index(Request $request)
//    {
//        $users = User::paginate(10);
//        return view('admin.users.index',compact('users'));
//    }
//
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
        User::create($request->all());

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
