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
        return view('mammals/editform')->with('mammals', $mammals);
    }

    public function update(Request $request, $id) {
        $mammals = Mammal::find($id);

        $mammals->genus = $request->input('genus');
        $mammals->information = $request->input('information');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/mammals/', $filename);
            $mammals->image = $filename;
        }

        $mammals->save();
        return redirect('mammals/mammals')->with('mammals', $mammals);
    }

    public function delete($id){
        $mammals = Mammal::find($id);
        $mammals->delete();

        return redirect('mammals/mammals')->with('mammals', $mammals);
    }
}
