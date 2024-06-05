<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function create(){

        return view('login.log');
    }
    public function store(Request $request){
        $login = new login;
        $login->user=$request->user;
        $login->pass=$request->pass;
        $login->save();
        return $login;

    }
}
