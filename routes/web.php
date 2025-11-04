<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PreRegistroController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Rota de teste
Route::get('/teste', function() {
    return view('teste');
});

// Formulário de fale-conosco
Route::post('/fale-conosco', [FormController::class, 'store'])
    ->name('fale-conosco.store');

// Formulário de pré-cadastro (exibe o formulário)
Route::get('/pre-registro', function() {
    return view('pre-cadastro');
})->name('pre-registro');

// Formulário de pré-cadastro (envio)
Route::post('/pre-registro', [PreRegistroController::class, 'store'])
    ->name('pre-registro.store');

// Páginas institucionais
Route::get('/quem-somos', function() {
    return view('quemsomos');
})->name('quem-somos');

Route::get('/veiculo', function() {
    return view('safe-register-car');
})->name('safe-register-car');

Route::get('/compliance', function() {
    return view('compliance');
})->name('compliance');

Route::get('/seguranca', function() {
    return view('seguranca');
})->name('seguranca');


Route::get("/privacidade", function(){
    return view("privacidade");
})->name("privacidade");

Route::get("/canal-denuncia", function(){
    return view("canal-denuncia");
})->name("canal-denuncia");

Route::get("/qualidade", function(){
    return view("qualidade");
})->name("qualidade");

Route::get("/solicitacao-titular", function(){
    return view("solicitacaotitular");
})->name("solicitacao-titular");

Route::get("/404", function(){
    return view("errors/404");
})->name("404");
