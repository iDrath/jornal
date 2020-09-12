<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticulosController extends Controller
{
    //
    public function index(){
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }
}
