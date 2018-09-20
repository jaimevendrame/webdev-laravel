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


/*
 * Routes Sites
 */
Route::get('/contato', 'Site\SiteController@contato');
Route::get('/empresa', 'Site\SiteController@empresa');
Route::get('/post', 'Site\SiteController@post');
Route::get('/categoria', 'Site\SiteController@categoria');
Route::get('/', 'Site\SiteController@index');

/****************************************************************************************
 * Rotas do Painel
****************************************************************************************/
Route::group(['prefix' => 'painel'], function (){
    //Usuários
    Route::any('/usuarios/pesquisar', 'Painel\UserController@search')->name('usuarios.search');
    Route::resource('/usuarios', 'Painel\UserController');


});


/**
 * Routes Painel
 */

//  Route::get('/painel/home', function (){

//      return view ('painel.index');
//  });

//  Route::get('/painel/list', function (){

//     return view ('painel.modulos.list');
// });


Route::get('/painel/forms', function (){

    return view ('painel.modulos.forms');
});


// // /**
// //  * Routes Painel
// //  */

// Route::get('/painel/home', 'Painel\PainelController@home');
// Route::get('/painel/list', 'Painel\PainelController@list');
// Route::get('/painel/forms', 'Painel\PainelController@forms');



