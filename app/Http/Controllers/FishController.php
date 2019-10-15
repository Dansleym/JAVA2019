<?php

namespace App\Http\Controllers;

use App\Fish;
use Illuminate\Http\Request;

class FishController extends Controller
{

    public function index()
    {
        $fishes = \App\Fish::all()->sortBy("genus");

        return view( 'animals/fishes', [
            'fishes' => $fishes,
            ]);
    }

    public function store(Request $request){

        $fishes = new Fish();

        $fishes->animals_id = "3";
        $fishes->genus = $request->input('genus');
        $fishes->information = $request->input('information');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/fishes/', $filename);
            $fishes->image = $filename;
        } else{
            return $request;
            $fishes->image='';
        }
        $fishes->save(
            \request()->validate([
                //'image' => 'required',
                'genus' => ['required', 'max:20'],
                'information' => 'required|min:1|max:100',
            ], [
                //'image.required' => 'Додайте зображення тварини',
                'genus.required' => 'Поле "Вид" має бути заповненим',
                'genus.max' => 'Вид тварини має містити максимум 20 символів',
                'information.required' => 'Поле Информації має бути заповненим',
                'information.min' => 'Інформація про тварину має мистити мінімум 10 та максимум 100 символів',
                'information.max' => 'Інформація про тварину має мистити мінімум 10 та максимум 100 символів',
            ])
        );
        return redirect('animals/fishes')->with('fishes', $fishes);   

    }

    public function edit($id){
        $polymorph = Fish::find($id);
        if(is_null($polymorph)){
            return "тварини не існує";
        }
        return view('mammals/editform')->with('polymorph', $polymorph);
    }

    public function update(Request $request, $id) {

        $fishes = Fish::find($id);
        if(is_null($fishes)){
            return "тварини не існує";
        }

        $fishes->genus = $request->input('genus');
        $fishes->information = $request->input('information');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/fishes/', $filename);
            $fishes->image = $filename;
        }

        $fishes->update(
            \request()->validate([
                //'image' => 'required',
                'genus' => ['required', 'max:20'],
                'information' => 'required|min:1|max:100',
            ], [
                //'image.required' => 'Додайте зображення тварини',
                'genus.required' => 'Поле "Вид" має бути заповненим',
                'genus.max' => 'Вид тварини має містити максимум 20 символів',
                'information.required' => 'Поле Информації має бути заповненим',
                'information.min' => 'Інформація про тварину має мистити мінімум 10 та максимум 100 символів',
                'information.max' => 'Інформація про тварину має мистити мінімум 10 та максимум 100 символів',
            ])
        );
        return redirect('animals/fishes')->with('fishes', $fishes);
    }

    public function delete($id){
        $fishes = Fish::find($id);
                if(is_null($fishes)){
            return "тварини не існує";
        }
        $fishes->delete();

        return redirect('animals/fishes')->with('fishes', $fishes);
    }

    public function show($id){
        $fishes = Fish::find($id);
                if(is_null($fishes)){
            return "тварини не існує";
        }

        return view('fishes/showform')->with('fishes', $fishes);
    }

}
