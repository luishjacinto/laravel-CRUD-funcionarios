<?php

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

Route::get('/', function () {
    return redirect('/inicio');
});

Route::get("/inicio", "IndexController@inicio");

Route::get("/gerenciar", "IndexController@gerenciar");

Route::post("/busca", "IndexController@busca");

Route::post("/adicionar", "IndexController@adicionar");

Route::get("/{matricula}/editar", "IndexController@editar");

Route::post("/alterar", "IndexController@alterar");

Route::get("/{matricula}/excluir", "IndexController@excluir");

