<?php

namespace App\Http\Controllers;
use App\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function getIndex(){
        $productos = Producto::all();
        return view('productos.index',array('arrayProductos'=>$productos));
    }
    public function getShow($id){
        $productos = Producto::findOrFail($id+1);
        return view('productos.show', array('arrayProducto'=>$productos,'id'=>$id));
    }
    public function getCreate(){
        return view('productos.create');
    }
    public function getEdit($id){
        $productos = Producto::findOrFail($id+1);
        return view('productos.edit', array('arrayProducto'=>$productos,'id'=>$id));
    }
}
