<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Tablero ;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    //
    public function view(Request $req)
    {
        //recojo el id del tablero
    	$idTab = $req->input('id') ;
        // buscamos las notas mediante la relación entre tableros-notas
    	$notas = Tablero::find($idTab)->notas()->get() ;
        
    	return view('notas.ver', ['notas' => $notas]) ;
    }
}
