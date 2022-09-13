<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    public function show()
    {
        $producto = DB::table('producto')->get();
        foreach ($producto as $productos)
        {     
            $productos->cantidad = 0;
        }
        return $producto;
    }
    public function save(Request $request){
        $producto = DB::table('compra')->insert([
            'idProducto' => $request->idProducto,
            'total' => $request->total,
            'cantidad' => $request->cantidad,
            'idUsuario' => $request->idUsuario,
          ]);
        return response()->json("Compra realizada exitosamente", 200);
    }
}
