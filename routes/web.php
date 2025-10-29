<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PreRegistroController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Rotas de teste e home
Route::get("/teste", function() {
    return view("teste");
});

Route::get("/home", function() {
    return view("home");
})->name("home");



<<<<<<< HEAD
Route::get("/quem-somos", function(){
    return view("quemsomos");
=======
// Formulários de envio
Route::post("/fale-conosco", [FormController::class, 'store'])
    ->name("fale-conosco.store");



Route::get("/pre-registro", function() {
    // Exibe o formulário de pré-cadastro
    return view("pre-cadastro");
})->name("pre-registro.create");

Route::post("/pre-registro", [PreRegistroController::class, 'store'])
    ->name("pre-registro.store");





// Páginas institucionais
Route::get("/quem-somos", function() {
    return view("quem-somos");
>>>>>>> FDEV-28/10/2025
})->name("quem-somos");

Route::get("/veiculo", function() {
    return view("safe-register-car");
})->name("safe-register-car");

Route::get("/compliance", function() {
    return view("compliance");
})->name("compliance");

Route::get("/seguranca", function() {
    return view("seguranca");
})->name("seguranca");
