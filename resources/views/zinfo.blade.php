@extends('layouts/master')

@section('title', 'Інформація')

@section('header')
    @parent
@endsection

@section('content')
        <!-- Styles -->
        <style>
            html, body {
                background-color: skyblue;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 300px;
                margin: 0;
            }

            .content {
                text-align: center;
                display: flex;
                justify-content: space-around;
                margin-top: 20px;  
            }

            .content div{
                box-shadow: 5px;
            }

            p{
                color: black;
                font-size: 12px;
            }

            .full-height {
                height: 300px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    <div class="container">
    <div class="flex-center1">
            <h2>Зоопарки</h2>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbiFptvmPzlHhFwRwwIR5-JL4_J8UVREB71JHJ6PdbAg4Ow_JuSg" alt="">
                        <div class="zoo__description">
                            <p>Рівненський зоопарк</p>
                            <p>ул. Киевская, 110, Ровно 33027, Украина</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR903ikUcBldWSkZ7R8iS0dnt5XUy5Ns4NwbLJAqwIHZMmPHsuG" alt="">
                        <div class="zoo__description">
                            <p>Миколаївський зоопарк</p>
                            <p>пл. Николая Леонтовича, 1, Николаев, Украина</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR903ikUcBldWSkZ7R8iS0dnt5XUy5Ns4NwbLJAqwIHZMmPHsuG" alt="">
                        <div class="zoo__description">
                            <p>Черкаський зоопарк</p>
                            <p>Смелянская улица, д. 132, Черкассы 18007, Украина</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKvYEQGxzrEDf7-IqGD1Bd--QfC9TWMInW9Xekuafo7MsNxYbV" alt="">
                        <div class="zoo__description">
                            <p>Харківський зоопарк</p>
                            <p>ул. Сумская, 35, Харьков 61022, Украина</p>
                        </div>
                    </div>
            </div>
        </div>
        </div>
@endsection