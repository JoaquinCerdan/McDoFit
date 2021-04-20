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
    return view('home');
});

Route::get('training','TrainingController@listTrainings');
Route::get('maquinas','MachineController@listMachines');
Route::get('clientes','ClientController@listClients');
Route::get('clientes/{id}','ClientController@formularioModificarClients');
Route::post('clientes/{id}','ClientController@modificarClients');
Route::post('clientes/','ClientController@borrarClients');


