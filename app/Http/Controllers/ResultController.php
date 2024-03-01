<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    
    public function create() {

        return view('result');
       
    }
    public function store(Request $request ){

        

        $producto = new result ();

        $producto->a=$request->a;
        $producto->b=$request->b;
        $producto->c=$request->c;


    $discriminante = $b=$request->b * $b=$request->b - 4 * $a=$request->a * $c=$request->c;

    
    if ($discriminante > 0) {
        $x1 = (-$b=$request->b + sqrt($discriminante)) / (2 * $a=$request->a);
        $x2 = (-$b=$request->b + sqrt($discriminante)) / (2 * $a=$request->a);
        $producto->x1=$x1;
        $producto->x2=$x2;
        $producto->save();
        return $producto;

    } elseif ($discriminante == 0) {

        $x1 = -$b / (2 * $a=$request->a);
        $x2 = -$b / (2 * $a=$request->a);
        $producto->x1=$x1;
        $producto->x2=$x2;
        $producto->save();
        return $producto;

        
    } else {
        
        return 'no hay soluciones posibles';
    }

    }


}




