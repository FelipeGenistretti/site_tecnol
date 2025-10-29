<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get("/teste", function(){
    return view("teste");
});


Route::get("/home", function(){
    return view("home");
})->name("home");

Route::post("/fale-conosco", [FormController::class, 'store'])->name("fale-conosco.store");


Route::get("/quem-somos", function(){
    return view("quemsomos");
})->name("quem-somos");

Route::get("/veiculo", function(){
    return view("safe-register-car");
})->name("safe-register-car");

Route::get("/compliance", function(){
    return view("compliance");
})->name("compliance");

Route::get("/seguranca", function(){
    return view("seguranca");
})->name("seguranca");
