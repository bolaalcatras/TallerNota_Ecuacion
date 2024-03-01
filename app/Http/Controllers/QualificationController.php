<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    
    public function create() {

        return view('qualification');
       
    }

    public function store(Request $request ){

        

        $producto = new Qualification ();
        $producto->name=$request->name;  
        $producto->nota1=$request->nota1;
        $producto->nota2=$request->nota2;
        $producto->nota3=$request->nota3;



        $resultado=($nota1=$request->nota1+$nota2=$request->nota2+$nota3=$request->nota3)/3;

        $producto->resultado=$resultado;
        $producto->save();
        return $producto;
 
 
     }

}
