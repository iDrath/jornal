<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticulosController extends Controller
{
    //
    public function index(){
        $articulos = Articulo::orderBy('created_at', 'desc')->get();
        return view('articulos.index', compact('articulos'));
    }

    public function show($id){
        $articulo = Articulo::find($id);

        //dd($articulo);
        return view('articulos.show', compact('articulo'));

    }
}
