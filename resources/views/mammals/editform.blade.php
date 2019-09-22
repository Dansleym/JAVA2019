@extends('layouts/master')

@section('nav')
    
@endsection

@section('content')
<div class="container">
 
    <div class="flex-center1">
                
        <form action="/updateDB/{{ $mammals->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <h3>Редагування ссавців</h3> 
            <img class="mammals-img" src="/img/mammals/{{ $mammals->image }}" style="width: 200px; height: 200px;">

            <div class="form-row">
                <label class="form-label" for="">Choose image: </label>
                <input type="file" name="image" value="{{ $mammals->image }}">              
            </div>
            <div class="form-row">
                <label class="form-label" for="">Genus:</label>
                <input class="form-input" type="text" name="genus" value="{{ $mammals->genus }}">
            </div> 
            <div class="form-row">
                <label class="form-label" for="">Information:</label>
                <input class="form-input" type="text" name="information" value="{{ $mammals->information }}">
            </div>
            <div class="form-row">
                <button class="form-button" type="submit" name="submit">Edit Data</button>   
                <a href="/mammals/mammals"><button class="form-button form-button-back" type="button" name="button">Back</button></a>
            </div>           
        </form>
        
    </div>
</div>
@endsection       