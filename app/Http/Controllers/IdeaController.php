<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IdeaController extends Controller
{
    public function index(){

        //nos conectamos a la base de datos, a la tabla ideas

        //select * from ideas
        $ideas = DB::table('ideas')->get();


        return view('ideas.index',['ideas'=> $ideas]); //nos retorna la vista, y manda las ideas en la vista como varibles 'ideas'
    }
}
