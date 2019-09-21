<?php

Route::get('/', "PagesControler@zoo");

Route::get('/zinfo', "PagesControler@zinfo");

Route::get('/news', "PagesControler@news");

Route::get('/contacts', "PagesControler@contacts");

Route::get('/animals', "PagesControler@animals");

Route::get('/galery', "PagesControler@galery");

Route::get('/tickets', "PagesControler@tickets");

Route::get('/mammals/mammals', "MammalsController@index");
