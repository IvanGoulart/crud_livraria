<?php


Route::get('/', function () {
    return view('app');
});

Route::resource('autor','AutorController');

Route::resource('product','ProdutoController');
Route::resource('editora','EditoraController');

Route::get('gravarautor/{id}', 'UserAutorController@update')->name('gravar');
Route::get('editar/{id}', 'UserAutorController@edit')->name('editar');
//Route::delete('deletarautor/{id}', 'AutorController@destroy')->name('deletar');

Route::delete('deletarautor/{id}', [
    'as' => 'deletar',
    'uses' => 'AutorController@destroy'
]);