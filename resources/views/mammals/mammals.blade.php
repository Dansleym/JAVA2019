@extends('layouts/master')

@section('title', 'Ссавці')

@section('header')
    @parent
@endsection

@section('content')

        <div class="flex-center1">
            <h2>Ссавці</h2>
        </div>

        <div class="flex-center1 ">
            <ul class="mammals__box ">
 
                @foreach($mammals as $mammal)  

                    <li class="card">
                        <img class="mammals-img" src="/img/{{ $mammal->getM_img() }}.jpg" alt="">
                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $mammal->getM_class() }}
                            </p>
                        </div>
                    </li> 
     
                @endforeach
                
            </ul>
        </div> 

@endsection       