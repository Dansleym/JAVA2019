<?php

Route::get('/', "PagesControler@zoo");

Route::get('/zinfo', "PagesControler@zinfo");

Route::get('/news', "PagesControler@news");

Route::get('/contacts', "PagesControler@contacts");

Route::get('/animals', "PagesControler@animals");

Route::get('/galery', "PagesControler@galery");

Route::get('/tickets', "PagesControler@tickets");

Route::get('/addform', "PagesControler@addform");

Route::get('/mammals/mammals', "MammalsController@index");

Route::post('/addimage', "MammalsController@store")->name('addimage');


Route::get('/editform/{id}', "MammalsController@edit");

Route::patch('/updateDB/{id}', "MammalsController@update");

Route::get('/showform/{id}', "MammalsController@show");

Route::get('/mammals/showform', "AnimalsController@index");


Route::get("/deleteDB/{id}", "MammalsController@delete");

Route::get('/addAnimals', "PagesControler@addAnimals");

Route::post('/addClassAnimals', "AnimalsController@store")->name('addClassAnimals');

