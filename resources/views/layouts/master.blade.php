@section('header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title')
        </title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>

        <div class="flex-center1 position-ref full-height1">
            <div class="content1">
                <div class="title1 m-b-md1">
                    <a href="/">Зоопарк.UA</a>   
                </div>

                <div class="links1">               
                    <a href="/zinfo">Зоопарк</a>
                    <a href="/animals">Тварини</a>
                    <a href="/news">Новини</a>
                    <a href="/tickets">Квитки</a>
                    <a href="/contacts">Контакти</a>
                    <a href="/galery">Галерея</a>                   
                </div>
            </div>
        </div>
@show 

@yield("content")

    </body>
</html>
