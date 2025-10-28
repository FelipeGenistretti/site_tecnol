<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get("/teste", function(){
    return view("teste");
});

Route::get('/quemsomos',function(){
    return view("quemsomos");
})->name('quemsomos');