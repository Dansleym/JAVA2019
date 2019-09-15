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
                    <li>
                        <img class="mammals-img" src="/img/<?php echo ($mammal->getM_img());?>.jpg" alt="">
                        <p class="mammal-classes">
                            {{ $mammal->getM_class() }}
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>  

@endsection       