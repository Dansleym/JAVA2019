<?php

namespace App\Http\Controllers;

use App\Mammal;
use Illuminate\Http\Request;

class MammalsController extends Controller
{
    public function index(){
        $mammals = \App\Mammal::all()->sortBy("genus");

        return view( 'mammals/mammals', [
            'mammals' => $mammals,
            ]);
    }
}
