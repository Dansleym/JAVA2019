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

    public function store(Request $request){

        $mammals = new Mammal();

        $mammals->animals_id = "5";
        $mammals->genus = $request->input('genus');
        $mammals->information = $request->input('information');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/mammals/', $filename);
            $mammals->image = $filename;
        } else{
            return $request;
            $mammals->image='';
        }
        $mammals->save(
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
        return redirect('mammals/mammals')->with('mammals', $mammals);   

    }

    public function edit($id){
        $polymorph = Mammal::find($id);
        if(is_null($polymorph)){
            return "тварини не існує";
        }
        return view('mammals/editform')->with('polymorph', $polymorph);
    }

    public function update(Request $request, $id) {

        $mammals = Mammal::find($id);
        if(is_null($mammals)){
            return "тварини не існує";
        }

        $mammals->genus = $request->input('genus');
        $mammals->information = $request->input('information');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/mammals/', $filename);
            $mammals->image = $filename;
        }

        $mammals->update(
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
        return redirect('mammals/mammals')->with('mammals', $mammals);
    }

    public function delete($id){
        $mammals = Mammal::find($id);
                if(is_null($mammals)){
            return "тварини не існує";
        }
        $mammals->delete();

        return redirect('mammals/mammals')->with('mammals', $mammals);
    }

    public function show($id){
        $mammals = Mammal::find($id);
                if(is_null($mammals)){
            return "тварини не існує";
        }

        return view('mammals/showform')->with('mammals', $mammals);
    }

}
