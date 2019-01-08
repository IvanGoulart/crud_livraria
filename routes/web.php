<?php


Route::get('/', function () {
    return view('app');
});

Route::resource('autor','AutorController');



Route::resource('product','ProdutoController');
Route::resource('editora','EditoraController');

Route::get('gravarautor/{id}', 'UserAutorController@update')->name('gravar');