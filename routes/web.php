<?php


Route::get('/', function () {
    return view('app');
});

Route::resource('autor','AutorController');

Route::resource('product','ProdutoController');
Route::resource('editora','EditoraController');

Route::get('gravarautor/{id}', 'AutorController@update')->name('gravar');
Route::get('editar/{id}', 'AutorController@edit')->name('editar');
Route::get('localizaautor/{id}', 'AutorController@localiza')->name('localizaautor');
Route::get('alterarautor/{id}', 'AutorController@update')->name('alteraautor');

Route::delete('deletarautor/{id}', [
    'as' => 'deletar',
    'uses' => 'AutorController@destroy'
]);