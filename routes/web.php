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
// Route for Frontend
Route::get('/', [
    'as' => 'index',
    'uses' => 'Frontend\HomeController@index'
]);

// Route for Backend
Route::group(['prefix' => '/backend'], function () {
    Route::get('/', [
        'as'    => 'backend.index',
        'uses'  => 'Backend\AppController@index'
    ]);
    
    Route::get('/produtos', [
        'as'    => 'backend.produtos',
        'uses'  => 'Backend\ProdutosController@index'
    ]);
    Route::get('/listDataProdutos', [
        'as'    => 'backend.produtos.listdata',
        'uses'  => 'Backend\ProdutosController@listDataProdutos'
    ]);
    Route::get('/produtos/create', [
        'as'    => 'backend.produtos.create',
        'uses'  => 'Backend\ProdutosController@create'
    ]);
    Route::post('/produtos/store', [
        'as'    => 'backend.produtos.store',
        'uses'  => 'Backend\ProdutosController@store'
    ]);



    Route::get('/grupos', [
        'as'    => 'backend.grupos',
        'uses'  => 'Backend\GruposController@index'
    ]);
    Route::get('/listDataGrupos', [
        'as'    => 'backend.grupos.listdata',
        'uses'  => 'Backend\GruposController@listDataGrupos'
    ]);
    Route::get('/grupos/create', [
        'as'    => 'backend.grupos.create',
        'uses'  => 'Backend\GruposController@create'
    ]);
    Route::post('/grupos/store', [
        'as'    => 'backend.grupos.store',
        'uses'  => 'Backend\GruposController@store'
    ]);
});

