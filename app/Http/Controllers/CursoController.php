<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Category;
use App\Models\Post;
use PhpParser\Builder\Function_;

class CursoController extends Controller
{

    public function consultasElokuent(){

        $user = User::find(2);
        return $user->posts;
        


    }


    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('cursos.listar', compact('cursos'));
    }

    public function create(){

        return view('cursos.curso');
    }

    public function store (Request $request){
        $curso = new curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
        return view('cursos.curso');
    }

    public Function show (Curso $curso){

        return view('cursos.show', compact('curso'));

    }

    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('curso.index');
    }

    public function edit (Curso $curso){

        return view('cursos.edit',compact('curso'));

    }
    public function update(Request $request,Curso $curso ){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();
        return redirect()->route('curso.index');

    }

}
