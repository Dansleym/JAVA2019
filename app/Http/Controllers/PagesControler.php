<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
    public function zoo(){
        return view('zoo');
    }

    public function galery(){
        return view('galery');
    }

    public function zinfo(){
        return view('zinfo');
    }

    public function tickets(){
        return view('tickets');
    }

    public function contacts(){
        return view('contacts');
    }

    public function animals(){
        return view('animals');
    }

    public function news(){
        return view('news');
    }

    public function addform(){
        return view('mammals/addform');
    }

    public function addAnimals(){
        return view('addAnimals');
    }
}

