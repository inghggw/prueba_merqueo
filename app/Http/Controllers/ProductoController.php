<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('producto.listarProductos');
    }

    /**
     * Data of listing for Ajax.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTable(){
        return datatables()->eloquent(Producto::query()->with('estado'))->toJson();
    }
}
