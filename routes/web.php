<?php


Route::get('/', function () {
    return view('app');
});

Route::resource('autor','AutorController');
Route::resource('product','ProdutoController');
Route::resource('editora','EditoraController');

Route::get('gravarautor/{id}', 'AutorController@update')->name('gravar');
Route::get('editarautor/{id}', 'AutorController@edit')->name('editar');
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

Route::get('/criareditora', function () {
    return view('criar-editora');
});
Route::post('criareditora', 'EditoraController@create')->name('criareditora');
Route::post('alterareditora', 'EditoraController@update')->name('altereditora');
Route::get('editareditora/{id}', 'EditoraController@edit')->name('editar');
Route::get('localizaeditora/{id}', 'EditoraController@localiza')->name('localizaeditora');
Route::post('alterareditora', 'EditoraController@update')->name('alteraeditora');

Route::delete('deletareditora/{id}', [
    'as' => 'deletar',
    'uses' => 'EditoraController@destroy'
]);

Route::resource('livro','LivroController');
Route::get('editarlivro/{id}', 'LivroController@edit')->name('editarlivro');
Route::get('localizalivro/{id}', 'LivroController@localiza')->name('localizalivro');
Route::post('alterarlivro', 'LivroController@update')->name('alterlivro');
