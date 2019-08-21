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

Route::resource('/personal', 'PersonalController');

Route::get('/content/personal', 'PersonalController@mostarPersonal');

Auth::routes();

