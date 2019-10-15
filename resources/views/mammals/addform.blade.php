@extends('layouts/master')

@section('nav')
    
@endsection

@section('content')
<div class="container">
 
    <div class="flex-center1">
                
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Додавання тварини</h3> 
            <div class="form-row">
                <label class="form-label grid-item1" for="">Choose image: </label>
                <input class="grid-item2" required type="file" name="image">
            </div>

            <div class="form-row" style="margin-bottom: 20px; margin-top: 20px;">
                <label class="form-label grid-item1" for="">Animal class:</label>
                <select class="form-input grid-item2" name="option" id="">
                    <option selected disabled value="0">Виберіть класс тварини</option>
                        @foreach($animals as $animal)
                            <option value="{{ $animal->id }}">{{ $animal->animals_class }}</option>
                        @endforeach
                </select> 
            </div>
 
            <div class="form-row">
                @include("includes/input",[
                    'fieldId' => 'genus',
                    'labelText' => 'Genus',
                    'value' => '',
                ])
            </div> 

            <div class="form-row">
                @include("includes/input",[
                    'fieldId' => 'information',
                    'labelText' => 'Information',
                    'value' => '',
                ])
            </div>

            <div class="form-row">
                <button class="form-button" type="submit" name="submit">Save Data</button>   
                <a href="animals"><button class="form-button form-button-back" type="button" name="button">Back</button></a>
            </div>           
        </form>
        
    </div>
</div>
@endsection       