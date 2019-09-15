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

    public function mammals(){
        return view('mammals/mammals', [
            'mammals' => Mammals::getMammals(), 
        ]);
    }

}

class Mammals{
    private $m_img;
    private $m_class;

    public function __construct(String $m_img, String $m_class){
        $this->m_img = $m_img;
        $this->m_class = $m_class;
    }

    public function getM_img(): String
    {
        return $this->m_img;
    }

    public function getM_class(): String
    {
        return $this->m_class;
    }

    public static function getMammals(){
        return[
            new Mammals('mammal_cat','rice'),
            new Mammals('mammal_lion','lion'),
            new Mammals('mammal_tiger','tiger'),
        ];
    }
}
