<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    public function show()
    {
        $producto = DB::table('producto')->get();
        return $producto;
    }
}
