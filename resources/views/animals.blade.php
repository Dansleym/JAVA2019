@extends('layouts/master')

@section('title', 'Тварини')

@section('header')
    @parent
@endsection

@section('content')
        <div class="flex-center1">
            <h2>Тварини</h2>
        </div>

        <ul class="animal__icon flex-center1">


            <li><a href="mammals/mammals" class="flex-center-column"><div class="animal__icon-item"></div><span>Ссавці</span></a></li>
            <li><a href="" class="flex-center-column"><div class="animal__icon-item"></div><span>Птахи</span></a></li> 
            <li><a href="" class="flex-center-column"><div class="animal__icon-item"></div><span>Риби</span></a></li> 
            <li><a href="" class="flex-center-column"><div class="animal__icon-item"></div><span>Плазуни</span></a></li> 
            <li><a href="" class="flex-center-column"><div class="animal__icon-item"></div><span>Амфібії</span></a></li> 
            <li><a href="" class="flex-center-column"><div class="animal__icon-item"></div><span>Безхребетні</span></a></li>                 


        </ul>
@endsection
 