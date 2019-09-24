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
        <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    </head>
    <body>
@show 

@section('nav')
        <div class="flex-center1 position-ref full-height1">
            <div class="content1">
                <div class="title1 m-b-md1">
                    <a href="/">Зоопарк.UA</a>      
                </div>

            <div class="enter">
                <a href="javascript:PopUpShow2()">Вхід </a>/
                <a href="javascript:PopUpShow()">Реестрація</a> 
            </div>
                

                <div class="links1">               
                    <a href="/zinfo">Зоопарки</a>
                    <a href="/animals">Тварини</a>
                    <a href="/news">Новини</a>
                    <a href="/tickets">Квитки</a>
                    <a href="/contacts">Контакти</a>
                    <a href="/galery">Галерея</a>                                    
                </div>
            </div>
        

        <div class="" id="popup1" style="box-shadow: 0 0 0 10000px rgba(0,0,0, 0.50); position: fixed; background: lightcyan; margin-top: 100px; z-index: 999;">
            <h3 style="margin-bottom: 20px; font-family: 'Times New Roman',serif">Зоопарк.UA</h3>
            <hr style="width: 500px;">
            <h4 style="text-align: center;">Регистрация</h4>
            <form class="reg-form" action="registration.php" method="post">
                <input class="form-input" name="login" placeholder="Login..." type="text">
                <input class="form-input" name="email" placeholder="Email..." type="email">
                <input class="form-input" name="passwd" placeholder="Password..." type="password">
                <input class="form-input" name="passwdRepeat" placeholder="Repeat password..." type="password">

                <button class="form-button-reg" type="submit" name="button1">Зарегестрироваться</button>

                <button class="form-button-reg" type="button" name="button2" onclick="PopUpHide()" ">Выйти
            </form>
        </div>

        <div class="" id="popup2" style="box-shadow: 0 0 0 10000px rgba(0,0,0, 0.50); position: fixed; background: lightcyan; margin-top: 100px; z-index: 999;">
            <h3 style="margin-bottom: 20px; font-family: 'Times New Roman',serif">Зоопарк.UA</h3>
            <hr style="width: 500px;">
            <h4 style="text-align: center;">Авторизация</h4>
            <form class="reg-form" action="validation.php" method="post">
                <input class="form-input" name="name" type="text" placeholder="Login...">
                <input class="form-input" name="passwd" type="password"  placeholder="Password...">
                <a href="">Забыли пароль или логин?</a>

                <button class="form-button-reg" type="submit" name="button1">Авторизация</button>

                <button class="form-button-reg form-button-reg-blue" type="button" onclick="PopUpHide2(); PopUpShow()" name="button1">Зарегестрироваться</button>

                <button class="form-button-reg" type="button" name="button2" onclick="PopUpHide2()" ">Выйти
            </form>
        </div>
    </div>
    </div>
    <script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы
        PopUpHide();
        PopUpHide2();
        $('.flyout').hide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
    function PopUpShow2(){
        $("#popup2").show();
    }
    //Функция скрытия PopUp
    function PopUpHide2(){
        $("#popup2").hide();
    }

    $("#menu").hover(function(){
        $('.flyout').show();
    },function(){
        $('.flyout').hide();
    });
    </script>
@show
 

@yield("content")

    </body>
</html>
