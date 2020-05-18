<?php



Route::resource('users', 'UserController'); // ->middleware('auth');

/*
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/{id}', 'UserController@show')->name('users.show');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::get('users/{id}/delete', 'UserController@delete')->name('users.delete');
Route::post('users', 'UserController@store')->name('users.store');
Route::put('users/{id}', 'UserController@update')->name('users.update');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');
*/

Route::get('/', function () {
    return 'Olá';
});

Route::get('/empresa', function (){
    return view('site.contact');
});

Route::get('/contato', function (){
    return 'Contato';
});