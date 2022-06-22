<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Pais;
use Mockery\Generator\StringManipulation\Pass\Pass;

class personaController extends Controller
{
    public function insertar(Request $req){
        $per = new Persona();
        $per->nombre = $req->nombre;
        $per->apellidos=$req->apellidos;
        $per->edad=$req->edad;
        $per->estatus=1;
        $per->telefono=$req->telefono;
        $per->fk_pais=$req->fk_pais;

        $per->save();
        return redirect()->route('pais.mostrar_pk');
    }

    public function mostrar()
    {
        //No es necesario asignar nombre a todos *as
        $personas=Persona::select('id','persona.nombre as nombre', 'apellidos', 'edad', 'estatus', 'telefono','fk_pais', '_pais.nombre as paisN')
        ->join('_pais','persona.fk_pais','=','_pais.pk_pais')
        ->where('estatus',1)
        ->orderBy('nombre')
        ->take(1)
        ->get();
        // $paises = Pais::all();
        // $newpersonas = $personas;
        // foreach ($personas as $persona => $value) {
        //     foreach ($paises as $pais => $val) {
        //         if($val->pk_pais==$value->fk_pais){
        //             foreach ($newpersonas as $per => $v) {
        //                 if($v->nombre==$value->nombre){
        //                     $v->pais=$val->nombre;
        //                 }
        //             }
        //         }
        //     }
        // }
        return View('lista_personas',compact('personas'));
    }

    public function eliminar(Persona $per){
        $per->delete();
        return redirect()->route('persona.mostrar');
    }

    public function editar(Persona $per){
        $paises = Pais::all();
        return View('editar_persona',compact('per'), compact('paises'));
    }

    public function actualizar(Persona $per,Request $req){
        $per->nombre = $req->nombre;
        $per->apellidos=$req->apellidos;
    }
}
