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


    Route::get('/promocoes', [
        'as'    => 'backend.promocoes',
        'uses'  => 'Backend\PromocoesController@index'
    ]);
    Route::get('/listDatapromocoes', [
        'as'    => 'backend.promocoes.listdata',
        'uses'  => 'Backend\PromocoesController@listDatapromocoes'
    ]);
    Route::get('/promocoes/create', [
        'as'    => 'backend.promocoes.create',
        'uses'  => 'Backend\PromocoesController@create'
    ]);
    Route::post('/promocoes/store', [
        'as'    => 'backend.promocoes.store',
        'uses'  => 'Backend\PromocoesController@store'
    ]);


    Route::get('/usuarios', [
        'as'    => 'backend.usuarios',
        'uses'  => 'Backend\UsuariosController@index'
    ]);
    Route::get('/listDataUsuarios', [
        'as'    => 'backend.usuarios.listdata',
        'uses'  => 'Backend\UsuariosController@listDataUsuarios'
    ]);
    Route::get('/usuarios/create', [
        'as'    => 'backend.usuarios.create',
        'uses'  => 'Backend\UsuariosController@create'
    ]);
    Route::post('/usuarios/store', [
        'as'    => 'backend.usuarios.store',
        'uses'  => 'Backend\UsuariosController@store'
    ]);


    Route::get('/unidades', [
        'as'    => 'backend.unidades',
        'uses'  => 'Backend\UnidadesController@index'
    ]);
    Route::get('/listDataunidades', [
        'as'    => 'backend.unidades.listdata',
        'uses'  => 'Backend\UnidadesController@listDataUnidades'
    ]);
    Route::get('/unidades/create', [
        'as'    => 'backend.unidades.create',
        'uses'  => 'Backend\UnidadesController@create'
    ]);
    Route::post('/unidades/store', [
        'as'    => 'backend.unidades.store',
        'uses'  => 'Backend\UnidadesController@store'
    ]);


    Route::get('/configuracoes', [
        'as'    => 'backend.configuracoes',
        'uses'  => 'Backend\ConfiguracoesController@index'
    ]);
    Route::post('/configuracoes/store', [
        'as'    => 'backend.configuracoes.store',
        'uses'  => 'Backend\ConfiguracoesController@store'
    ]);
});

