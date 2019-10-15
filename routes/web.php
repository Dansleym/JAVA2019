<?php

Route::get('/', "PagesControler@zoo");

Route::get('/zinfo', "PagesControler@zinfo");

Route::get('/news', "PagesControler@news");

Route::get('/contacts', "PagesControler@contacts");

Route::get('/animals', "PagesControler@animals");

Route::get('/galery', "PagesControler@galery");

Route::get('/tickets', "PagesControler@tickets");

Route::get('/addAnimals', "PagesControler@addAnimals");


Route::get('/addform', "AnimalsController@index");
Route::get('/mammals/showform', "AnimalsController@index");
Route::post('/addClassAnimals', "AnimalsController@store")->name('addClassAnimals');


Route::get('/editform/{id}', "MammalsController@edit");
Route::get('/editformfish/{id}', "FishController@edit");

Route::patch('/updateDB/{id}', "MammalsController@update");
Route::patch('/updateDBfish/{id}', "FishController@update");


Route::get('/mammals/mammals', "MammalsController@index");
Route::post('/addimage', "FishController@store")->name('addimage');


Route::get('/showform/{id}', "MammalsController@show");
Route::get("/deleteDB/{id}", "MammalsController@delete");


Route::get('animals/fishes', "FishController@index");


