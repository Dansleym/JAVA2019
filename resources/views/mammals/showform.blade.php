@extends('layouts/master')

@section('nav')
    
@endsection

@section('content')
<div class="container">
 
    <div class="flex-center-column">
                
            <h3>{{ $animals->animals->animals_class }}</h3> 
            <img class="mammals-img" src="/img/mammals/{{ $animals->image }}" style="width: 280px; height: 300px;">

            <div class="form-row">
                <label class="form-label" for="">Genus:</label>
                <input maxlength="30" class="form-input" id="{{ $errors->has('genus') ? 'is-invalid':'' }}" type="text" id="genus" name="genus" value="{{ $animals->genus }}">

            </div> 

            <div class="form-row">
                <label class="form-label" for="">Information:</label>
                <input class="form-input" id="{{ $errors->has('information') ? 'is-invalid':'' }}" type="text" name="information" value="{{ $animals->information }}">
            </div>

            <div class="form-row">  
                <a href="/mammals/mammals"><button class="form-button form-button-back" type="button" name="button">Back</button></a>
            </div>           
       
    </div>
</div>
@endsection       