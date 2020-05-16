<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Olá';
});

Route::get('/empresa', function (){
    return view('site.contact');
});

Route::get('/contato', function (){
    return 'Contato';
});