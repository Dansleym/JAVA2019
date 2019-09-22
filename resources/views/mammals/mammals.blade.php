@extends('layouts/master')

@section('title', 'Ссавці')

@section('content')
<div class="container">

        <div class="flex-center1">
            <h2>Ссавці</h2>
        </div>

                <a class="db_links" href="/addform" style="color: blue;">Додати ссавця</a>
        <div class="flex-center1 ">
        
            <ul class="mammals__box ">

                @foreach($mammals as $mammal)  
                  
                    <li class="card">

                        <div class="cube-edit">
                            <a class="db_links" href="/editform/{{ $mammal->id }}">Редагувати</a>
                            <a class="db_links_red" href="/deleteDB/{{ $mammal->id }}">Видалити</a>
                        </div>  

                        <img class="mammals-img" src="/img/mammals/{{ $mammal->image }}" alt="">

                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $mammal->genus }}
                            </p>    
                            <span class="information">{{ $mammal->information }}</span>                    
                        </div>

                    </li> 
     
                @endforeach
                
            </ul>
        </div> 
</div>
@endsection       