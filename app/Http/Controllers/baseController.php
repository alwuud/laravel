<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Auth;
class baseController extends Controller
{
    protected function autosView(){

        $autos=DB::select("call listarAutos();");

        return view('autos', compact('autos'));
    }


    protected function registrarAutoView(){
        return view('registro');
    }

    protected function home(){
        return view('welcome');
    }



    protected function registrarAuto(Request $request){
        $marca=$request->marca;
        $modelo=$request->modelo;
        $linea=$request->linea;
        $descripcion=$request->descripcion;

        $auto=DB::select("call registrarAuto(\"$marca\",\"$linea\",\"$modelo\",\"$descripcion\")");

        return redirect()->route('autos');

    }



    protected function eliminarAuto($auto_id){

        $auto=DB::select("call eliminarAuto(\"$auto_id\")");

        return redirect()->route('autos');
    }


        
}
