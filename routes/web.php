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
    Route::get('/produtos/edit/{id}', [
        'as'    => 'backend.produtos.edit',
        'uses'  => 'Backend\ProdutosController@edit'
    ]);
    Route::put('/produtos/update/{id}', [
        'as'    => 'backend.produtos.update',
        'uses'  => 'Backend\ProdutosController@update'
    ]);
    Route::delete('/produtos/delete/{id}', [
        'as'    => 'backend.produtos.delete',
        'uses'  => 'Backend\ProdutosController@delete'
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
    Route::get('/grupos/edit/{id}', [
        'as'    => 'backend.grupos.edit',
        'uses'  => 'Backend\GruposController@edit'
    ]);
    Route::put('/grupos/update/{id}', [
        'as'    => 'backend.grupos.update',
        'uses'  => 'Backend\GruposController@update'
    ]);
    Route::delete('/grupos/delete/{id}', [
        'as'    => 'backend.grupos.delete',
        'uses'  => 'Backend\GruposController@delete'
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
    Route::get('/promocoes/edit/{id}', [
        'as'    => 'backend.promocoes.edit',
        'uses'  => 'Backend\PromocoesController@edit'
    ]);
    Route::put('/promocoes/update/{id}', [
        'as'    => 'backend.promocoes.update',
        'uses'  => 'Backend\PromocoesController@update'
    ]);
    Route::delete('/promocoes/delete/{id}', [
        'as'    => 'backend.promocoes.delete',
        'uses'  => 'Backend\PromocoesController@delete'
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
    Route::get('/usuarios/edit/{id}', [
        'as'    => 'backend.usuarios.edit',
        'uses'  => 'Backend\UsuariosController@edit'
    ]);
    Route::put('/usuarios/update/{id}', [
        'as'    => 'backend.usuarios.update',
        'uses'  => 'Backend\UsuariosController@update'
    ]);
    Route::delete('/usuarios/delete/{id}', [
        'as'    => 'backend.usuarios.delete',
        'uses'  => 'Backend\UsuariosController@delete'
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
    Route::get('/unidades/edit/{id}', [
        'as'    => 'backend.unidades.edit',
        'uses'  => 'Backend\UnidadesController@edit'
    ]);
    Route::put('/unidades/update/{id}', [
        'as'    => 'backend.unidades.update',
        'uses'  => 'Backend\UnidadesController@update'
    ]);
    Route::delete('/unidades/delete/{id}', [
        'as'    => 'backend.unidades.delete',
        'uses'  => 'Backend\UnidadesController@delete'
    ]);


    Route::get('/configuracoes', [
        'as'    => 'backend.configuracoes',
        'uses'  => 'Backend\ConfiguracoesController@index'
    ]);
    Route::put('/configuracoes/update/{id}', [
        'as'    => 'backend.configuracoes.update',
        'uses'  => 'Backend\ConfiguracoesController@update'
    ]);
});
