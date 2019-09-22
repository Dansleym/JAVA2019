@extends('layouts/master')

@section('title', 'Новини')

@section('content')
        <style>

            .zoo__description{
                display: flex;

            }
            .zoo__description>img{
                width: 25%;
            }

            html, body {
                background-color: skyblue;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                margin-top: 20px; 
                margin-left: 10px; 
                margin-bottom: 20px; 
                width: 1000px; 
            }

            .content div{
                box-shadow: 5px;
            }

            p{
                color: black;
                font-size: 14px;
                text-align: left;
                margin-left: 20px;
            }
            .new__title{
                font-size: 18px;
                margin-left: 0; 
            }
            .news-img{
                height: 150px;
            }

            .full-height {
                height: 100vh;
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
    <body>
        <div class="flex-center1">
            <h2>Новини</h2>
        </div>    
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div>
                    <p class="new__title">Московский зоопарк объявил о переходе на осенний график</p>
                        <div class="zoo__description">
                            <img class="news-img" src="https://cdni.rt.com/russian/images/2019.09/thumbnail/5d6d3ab9370f2cd4448b4617.jpg" alt="">
                            <div>
                                <p>Московский зоопарк объявил, что переходит на осенний график. Об этом сообщает kp.ru.</p>
                                <p>2 сентября 2019, 21:4</p>
                            </div>
                </div>
                <div>
                    <p class="new__title">У японских макак в Московском зоопарке родился детёныш</p>
                        <div class="zoo__description">
                            <img class="news-img" src="https://cdni.rt.com/russian/images/2019.08/thumbnail/5d6566ba370f2c86138b457c.png" alt="">
                            <div>
                                <p>Пара японских макак в Московском зоопарке стала родителями, передаёт «Газета.Ru» со ссылкой на сообщение зоосада.</p>
                                <p>27 августа 2019, 20:37</p>
                            </div>
                </div>
                <div>
                    <p class="new__title">Просто кость пушистая: в Лондонском зоопарке взвесили животных</p>
                        <div class="zoo__description">
                            <img class="news-img" src="https://cdni.rt.com/russian/images/2019.08/thumbnail/5d6259dc370f2ca57c8b45b0.jpg" alt="">
                            <div>
                                <p>В Лондонском зоопарке прошло ежегодное взвешивание сурикатов, пингвинов, львов и других животных. 
                                Это делается, чтобы следить за здоровьем подопечных. Многие из них уже привыкли сами вставать на весы. 
                                Процедура занимает немало времени, ведь в зоопарке находятся более 19 тысяч особей.</p>
                                <p>25 августа 2019, 12:55</p>
                            </div>
                </div>
                <div>
                    <p class="new__title">В Московском зоопарке заявили о создании самой большой популяции фламинго в России</p>
                        <div class="zoo__description">
                            <img class="news-img" src="https://cdni.rt.com/russian/images/2019.08/thumbnail/5d5d2802370f2ce5478b45fb.jpg" alt="">
                            <div>
                                <p>В Московском зоопарке рассказали о создании самой большой популяции фламинго в России. 
                                Недавно на свет появились ещё семь птенцов, передаёт сайт «Москва 24».</p>
                                <p>21 августа 2019, 15:32</p>
                            </div>
                </div>
            </div>


            </div>
        </div>
        </div>
@endsection