<?php

namespace App\Http\Controllers;

use App\Animals;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $animals = \App\Animals::all()->sortBy("id");

        return view( 'mammals/showform', [
            'animals' => $animals,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $animals = new Animals();

        $animals->animals_class = $request->input('animals_class');

        $animals->save();
        return redirect('animals')->with('animals', $animals); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(Animals $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit(Animals $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animals $animals)
    {
        //
    }
}
