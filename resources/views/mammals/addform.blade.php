@extends('layouts/master')

@section('nav')
    
@endsection

@section('content')
<div class="container">
 
    <div class="flex-center1">
                
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Додавання ссавців</h3> 
            <div class="form-row">
                <label class="form-label" for="">Choose image: </label>
                <input type="file" name="image">
            </div>
            <div class="form-row">
                <label class="form-label" for="">Genus:</label>
                <input class="form-input" type="text" name="genus">
            </div> 
            <div class="form-row">
                <label class="form-label" for="">Information:</label>
                <input class="form-input" type="text" name="information">
            </div>
            <div class="form-row">
                <button class="form-button" type="submit" name="submit">Save Data</button>   
                <a href="/mammals/mammals"><button class="form-button form-button-back" type="button" name="button">Back</button></a>
            </div>           
        </form>
        
    </div>
</div>
@endsection       