<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
class paisController extends Controller
{
    public function insertar( Request $req){
        $pais = new Pais();
        $pais->nombre=$req->nombre;
        $pais->abreviatura=$req->abreviatura;
        $pais->save();
        //return view('lista_paises');
        //return 'Guardado';
    }
    public function mostrar(){
        $paises=Pais::all();
        return view('lista_paises',compact('paises'));
    }

    public function mostrar_pk(){
        $paises=Pais::all();
        return view('formulario_persona',compact('paises'));
    }

    public function eliminar(Pais $pk_pais){
        $pk_pais->delete();
        return redirect()->route('pais.mostrar');
    }

    public function editar(Pais $pk_pais){
        return View('editar_pais',compact('pk_pais'));
    }
    
    public function actualizar(Pais $pk_pais,Request $req){
        $pk_pais->nombre=$req->nombre;
        $pk_pais->abreviatura=$req->abreviatura;
        $pk_pais->save();
        return redirect()->route('pais.mostrar');
    }
}
