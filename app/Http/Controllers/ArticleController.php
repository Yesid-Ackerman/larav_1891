<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function indexx(){

        $article = Article::orderBy('id', 'desc')->get();
        return view('listado', compact('article'));
        //return  $cursos;
    }

    public function create_art(){
        
        return view('article');
    }

    public function store (Request $request){
        $article = new Article();
        $article->name=$request->name;
        $article->price=$request->price;
        $article->desc=$request->desc;
        $article->cant=$request->cant;
        $article->date_exp=$request->date_exp;
        $article->save();
        return $request;
    }
}
