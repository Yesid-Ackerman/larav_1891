<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class CursoController extends Controller
{

    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('listar', compact('cursos'));
    }

    public function create(){
        
        return view('curso');
    }

    public function Store (Request $request){
        $curso = new curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
        return $request;
    }

    public Function show (Curso $curso){

        return view('show', compact('curso'));

    }

    public Function destroy (Curso $curso){

        $curso ->delete();
        return redirect()-> route('curso.indexx');
        
    }


}
