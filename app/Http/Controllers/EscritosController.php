<?php

namespace App\Http\Controllers;

use App\Escrito;
use Illuminate\Http\Request;

class EscritosController extends Controller
{
    public function index()
    {
        $escritos = Escrito::paginate(10);
        return view('escritos.index',compact('escritos'));
    }
}
