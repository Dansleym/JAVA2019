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
        request()->validate([
            'image' => 'required',
            'genus' => ['required', 'max:20'],
            'information' => 'required|min:10|max:100',
        ], [
            'image.required' => 'Додайте зображення тварини',
            'genus.required' => 'Поле Genus має бути заповненим',
            'genus.max' => 'Вид тварини має містити максимум 20 символів',
            'information.required' => 'Поле Information має буди заповненим',
            'information.min' => 'Інформація про тварину має мистити мінімум 10 та максимум 100 символів',
            'information.max' => 'Інформація про тварину має мистити мінімум 10 та максимум 100 символів',
        ]);

        $mammals = new Mammal();
        
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
        $mammals->save();
        return redirect('mammals/mammals')->with('mammals', $mammals);   

    }

    public function edit($id){
        $mammals = Mammal::find($id);
        if(is_null($mammals)){
            return "тварини не існує";
        }
        return view('mammals/editform')->with('mammals', $mammals);
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
                'information' => 'required|min:10|max:100',
            ], [
                //'image.required' => 'Додайте зображення тварини',
                'genus.required' => 'Поле "Вид" має бути заповненим',
                'genus.max' => 'Вид тварини має містити максимум 20 символів',
                'information.required' => 'Поле Информації має буди заповненим',
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
}
