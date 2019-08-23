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

// Rutas de inicio (index)
Route::get('/', function () {
    return view('Index');
});

Route::get('/inicio', 'HomeController@index')->name('inicio');

// Verb	             URI	                Action	    Route Name
// GET          	/notas					index		notas.index
// GET				/notas/create			create		notas.create
// POST				/notas					store		notas.store
// GET				/notas/{nota}			show		notas.show
// GET				/notas/{nota}/edit		edit		notas.edit
// PUT/PATCH		/notas/{nota}			update		notas.update
// DELETE			/notas/{nota}			destroy		notas.destroy

//Index
Route::resource('/fieldservice', 'PersonalController');

Route::get('/personal/buscar',  'PersonalController@mostarPersonal');
Route::post('/personal/buscar',  'PersonalController@buscarPersonalPost');

Route::get('/personal/agregar', 'PersonalController@agregarPersonal');
Route::post('/personal/agregar', 'PersonalController@agregarPersonalPost');

Route::get('ajaxRequest', 'PersonalController@ajaxRequest');
Route::post('ajaxRequest', 'PersonalController@ajaxRequestPost');

Route::get('/personal/editar',  'PersonalController@editarPersonal');
Route::get('/personal/eliminar','PersonalController@eliminarPersonal');


// Route::post('ajaxRequest', 'PersonalController@ajaxRequestPost');


Route::get('/certificaciones', 'PersonalController@mostarCertificaciones');

Auth::routes();

