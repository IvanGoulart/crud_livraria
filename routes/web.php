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
Route::post('alterarautor', 'AutorController@update')->name('alteraautor');
Route::get('/criarautor', function () {
    return view('criar-autor');
});
Route::post('criarautor', 'AutorController@create')->name('criarautor');

Route::delete('deletarautor/{id}', [
    'as' => 'deletar',
    'uses' => 'AutorController@destroy'
]);