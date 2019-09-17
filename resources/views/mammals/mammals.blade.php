@extends('layouts/master')

@section('title', 'Ссавці')

@section('header')
    @parent
@endsection

@section('content')
               <?php $i = 0;?>

        <div class="flex-center1">
            <h2>Ссавці</h2>
        </div>
        <div class="flex-center1 ">
            <ul class="mammals__box ">
 
                @foreach($mammals as $mammal)  
                <?php $i++;?> 
                @if($i < 4)
                    <li class="card">
                        <img class="mammals-img" src="/img/<?php echo ($mammal->getM_img());?>.jpg" alt="">
                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $mammal->getM_class() }}
                            </p>
                        </div>
                    </li> 
                @endif      
                @endforeach
                
            </ul>
        </div> 

        <?php $i = 0;?>
        <div class="flex-center1 ">
            <ul class="mammals__box ">
 
                @foreach($mammals as $mammal)  
                <?php $i++;?> 
                @if($i > 3 && $i < 7)
                    <li class="card">
                        <img class="mammals-img" src="/img/<?php echo ($mammal->getM_img());?>.jpg" alt="">
                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $mammal->getM_class() }}
                            </p>
                        </div>
                    </li> 
                @endif      
                @endforeach
                
            </ul>
        </div> 
        
        <?php $i = 0;?>
        <div class="flex-center1 ">
            <ul class="mammals__box ">
 
                @foreach($mammals as $mammal)  
                <?php $i++;?> 
                @if($i > 6)
                    <li class="card">
                        <img class="mammals-img" src="/img/<?php echo ($mammal->getM_img());?>.jpg" alt="">
                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $mammal->getM_class() }}
                            </p>
                        </div>
                    </li> 
                @endif      
                @endforeach
                
            </ul>
        </div> 

@endsection       