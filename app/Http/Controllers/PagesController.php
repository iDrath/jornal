<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class PagesController extends Controller
{
    public function index(){
        $articulos = Articulo::orderBy('created_at', 'desc')->get();
        return view('index',compact('articulos'));
        
    }
    

    

}
