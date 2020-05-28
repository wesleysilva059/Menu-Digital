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
});

Route::get('/', function () {
    return view('backend.app');
});
