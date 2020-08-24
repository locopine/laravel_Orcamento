<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//pagina principal
Route::get('/', function () {
    return view('welcome');
});

//Rota Novos Usuarios
Route::get('/novousuario', function () {
    return view('Control_User@create');
});

//Rota Alterar usuarios
Route::get('/alterarusuario', function () {
    return view('Control_User@update');
});

//Rota Salvar usuarios
Route::get('/salvarusuario', function () {
    
});

//Rota Criar Instituuição
Route::get('users/{id}', function ($id) {
    
});

//Rota Criar Cartão
Route::get('/adicionacartao', function () {
    return view ('Control_Card@create');
});

//Rota Criar Receita
Route::get('/adicionareceita', function () {
   return view ('Control_Revenue@create'); 
});

//Route::get('/login', function () {
  //  return view ('login');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
