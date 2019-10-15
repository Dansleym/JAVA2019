@extends('layouts/master')

@section('nav')
    
@endsection

@section('content')
<div class="container">
 
    <div class="flex-center1">

            <form action="/{{ $polymorph->animals_id == 3 ? 'updateDBfish':'updateDB' }}/{{ $polymorph->id }}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <h3>Редагування ссавців</h3> 
            <img class="mammals-img" src="/img/{{ ($polymorph->animals_id == 3) ? 'fishes':'mammals' }}/{{ $polymorph->image }}" style="width: 200px; height: 200px;">

            <div class="form-row">
                <label class="form-label" for="">{{ ($polymorph->animals_id == 3) ? 'fishes':'mammals' }}</label>
                <input type="file" name="image" value="{{ $polymorph->image }}">              
            </div>
            <div class="form-row">
                @include("includes/input",[
                    'fieldId' => 'genus',
                    'labelText' => 'Genus',
                    'value' => $polymorph->genus,
                ])
            </div> 

            <div class="form-row">
                @include("includes/input",[
                    'fieldId' => 'information',
                    'labelText' => 'Information',
                    'value' => $polymorph->information,
                ])
            </div>

            <div class="form-row">
                <button class="form-button" type="submit" name="submit">Edit Data</button>   
                <a href="/mammals/mammals"><button class="form-button form-button-back" type="button" name="button">Back</button></a>
            </div>           
        </form>
        
    </div>
</div>
@endsection       