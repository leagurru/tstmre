<?php

namespace App\Http\Controllers\User;

use Barryvdh\DomPDF\Facade as PDF;
//use Barryvdh\DomPDF\PDF;
//use Datatables;
use App\Http\Controllers\Controller;
use App\Modelos\Admin\Mre;
use App\Modelos\User\Escrito;
use App\Http\Requests\User\Escrito\CreateEscritoRequest;
use App\Http\Requests\User\Escrito\UpdateEscritoRequest;
use App\Modelos\Admin\Organismo;
use App\Modelos\Admin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EscritosController extends Controller
{
    public function index()
    {

        $escritos       = Escrito::orderBy('fecha','DESC')->paginate(10);
//        $organismosPara = Organismo::pluck('nombreCorto','id')->all(); //ok parcialmente

        $organismosPara = Organismo::orderBy('nombreCorto','asc')
            ->where('escritos',1)
            ->pluck('nombreCorto','id')
            ->all(); //ok


        $users          = User::pluck('nombre','id')->all();

//        $organismosEn   = Mre::with('organismo')->get(); //ok parcialmente

        $organismosEn  = Organismo::where('es_mre',1)->pluck('nombreCorto','id')->all();
//dd($organismosEn);

        return view('user.escritos.index',compact('escritos','organismosPara','users', 'organismosEn'));
    }


    public function informe(Request $request)
    {

        $fecha         = $request->get('fecha');
        $organismo_id  = $request->get('organismo_id');
        $caratula      = $request->get('caratula');
        $causaNumero   = $request->get('causaNumero');
        $causaAnio     = $request->get('causaAnio');
        $observaciones = $request->get('observaciones');
        $user_id       = $request->get('user_id');
        $mre_id        = $request->get('id');


        $escritos = Escrito::caratula($caratula)
            ->fecha($fecha)
            ->organismo_id($organismo_id)
            ->causaNumero($causaNumero)
            ->causaAnio($causaAnio)
            ->observaciones($observaciones)
            ->user_id($user_id)
            ->mre_id($mre_id)
            ->orderBy('fecha','DESC')
            ->paginate(10);

//        $organismosPara = Organismo::pluck('nombreCorto','id')->all();
        $organismosPara = Organismo::orderBy('nombreCorto','asc')
            ->where('escritos',true )
            ->pluck('nombreCorto','id')
            ->all(); //ok

        $users          = User::pluck('nombre','id')->all();
        //$organismosEn   = Mre::with('organismo')->get();
//        $organismosEn  = Organismo::where('es_mre',true )->pluck('nombreCorto','id')->all();   anda ok se cambia por scope
        $organismosEn  = Organismo::MesasReceptoras()->pluck('nombreCorto','id')->all();




        if(is_null($request->input('accion'))){
            return view('user.escritos.index',compact('escritos','organismosPara','users', 'organismosEn'));
        }else{
            switch ($request->input('accion')) {
                case 'buscar':
                    return view('user.escritos.index',compact('escritos','organismosPara','users', 'organismosEn'));
                    break;

                case 'informe':

                    $pdf = PDF::loadView('user.escritos.informe', compact('escritos','organismosPara','users', 'organismosEn'));
                    return $pdf->download('listado.pdf');

//                    return view('user.escritos.informe',compact('escritos','organismosPara','users', 'organismosEn'));
                    break;

                case 'default':
                    return view('user.escritos.index',compact('escritos','organismosPara','users', 'organismosEn'));
                    break;
            }
        }

    }


//    public function informe(Request $request)
//    {
//
//        $fecha         = $request->get('fecha');
//        $organismo_id  = $request->get('organismo_id');
//        $caratula      = $request->get('caratula');
//        $causaNumero   = $request->get('causaNumero');
//        $causaAnio     = $request->get('causaAnio');
//        $observaciones = $request->get('observaciones');
//        $user_id       = $request->get('user_id');
//        $mre_id        = $request->get('id');
//
//
//        $escritos = Escrito::caratula($caratula)
//            ->fecha($fecha)
//            ->organismo_id($organismo_id)
//            ->causaNumero($causaNumero)
//            ->causaAnio($causaAnio)
//            ->observaciones($observaciones)
//            ->user_id($user_id)
//            ->mre_id($mre_id)
//            ->orderBy('fecha','DESC')
//            ->paginate(10);
//
////        $organismosPara = Organismo::pluck('nombreCorto','id')->all();
//        $organismosPara = Organismo::orderBy('nombreCorto','asc')
//            ->where('escritos',1)
//            ->pluck('nombreCorto','id')
//            ->all(); //ok
//
//        $users          = User::pluck('nombre','id')->all();
//        //$organismosEn   = Mre::with('organismo')->get();
//        $organismosEn  = Organismo::where('es_mre',1)->pluck('nombreCorto','id')->all();
//
//
//        if(is_null($request->input('accion'))){
//            return view('user.escritos.index',compact('escritos','organismosPara','users', 'organismosEn'));
//        }else{
//            switch ($request->input('accion')) {
//                case 'buscar':
//                    return view('user.escritos.index',compact('escritos','organismosPara','users', 'organismosEn'));
//                    break;
//
//                case 'informe':
//                    return view('user.escritos.informe',compact('escritos','organismosPara','users', 'organismosEn'));
//                    break;
//
//                case 'default':
//                    return view('user.escritos.index',compact('escritos','organismos','users', 'organismosEn'));
//                    break;
//            }
//        }
//
//    }

//    public function index(Request $request)
//    {
//
//        $fecha         = $request->get('fecha');
//        $organismo_id  = $request->get('organismo_id');
//        $caratula      = $request->get('caratula');
//        $causaNumero   = $request->get('causaNumero');
//        $causaAnio     = $request->get('causaAnio');
//        $observaciones = $request->get('observaciones');
//        $user_id       = $request->get('user_id');
//        $mre_id        = $request->get('id');
//
//
//        $escritos = Escrito::caratula($caratula)
//            ->fecha($fecha)
//            ->organismo_id($organismo_id)
//            ->causaNumero($causaNumero)
//            ->causaAnio($causaAnio)
//            ->observaciones($observaciones)
//            ->user_id($user_id)
//            ->mre_id($mre_id)
//            ->orderBy('fecha','DESC')
//            ->paginate(10);
//
//        $organismos    = Organismo::pluck('nombreCorto','id')->all();
//        $users         = User::pluck('nombre','id')->all();
//        $organismosEn  = Mre::with('organismo')->get();
//
//
//        if(is_null($request->input('accion'))){
//            return view('user.escritos.index',compact('escritos','organismos','users', 'organismosEn'));
//        }else{
//            switch ($request->input('accion')) {
//                case 'buscar':
//                    return view('user.escritos.index',compact('escritos','organismos','users', 'organismosEn'));
//                    break;
//
//                case 'informe':
//                    return view('user.escritos.informe',compact('escritos','organismos','users', 'organismosEn'));
//                    break;
//
//                case 'default':
//                    return view('user.escritos.index',compact('escritos','organismos','users', 'organismosEn'));
//                    break;
//            }
//        }
//
//
//
//
////        if($request->input('accion') == 'buscar'){
////            return view('user.escritos.index',compact('escritos','organismos','users', 'organismosEn'));
////        }else {
////            return view('user.escritos.informe',compact('escritos','organismos','users', 'organismosEn'));
////        }
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organismos = Organismo::pluck('nombre','id')->all();
        $users = User::pluck('nombre','id')->all();
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
        $escrito = Escrito::findOrfail($id);

        return view('user.escritos.show',compact('escrito'));
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
        $users   = User::pluck('nombre','id')->all();
        return view('user.escritos.edit',compact('escrito','organismos','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEscritoRequest $request, $id)
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
        $escrito = Escrito::findOrFail($id);
        $escrito->delete();
        Session::flash('success','El escrito ha sido borrado');
        return redirect('/user/escritos');
    }

    public function generopdf(){
        $detalles = ['titulo' => 'Testeo de pdf'];
        $pdf = PDF::loadView('textDoc', $detalles);
        return $pdf->download('MiPdf');
    }

}
