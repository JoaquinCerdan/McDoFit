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

Route::get('borrar/{id}','ClientController@borrarClients');
Route::post('borrar/{id}','ClientController@borrarClients');

Route::get('addCliente','ClientController@addCliente');
Route::post('addCliente','ClientController@addCliente');

Route::get('add','ClientController@add');
Route::post('add','ClientController@add');


Route::get('trainersAdmin','TrainerController@listTrainers');
Route::get('addTrainer','TrainerController@addTrainer');

Route::post('insertTrainer','TrainerController@insertTrainer');


Route::get('modifyTrainer/{id}','TrainerController@modifyTrainer');
Route::post('modifyTrainer/{id}','TrainerController@modifyTrainer');


//para borrar trainer
Route::get('deleteTrainer/{id}','TrainerController@deleteTrainer');
Route::post('deleteTrainer/{id}','TrainerController@deleteTrainer');

//para ver la página de mi cuenta
Route::get('redirectMiCuenta','TrainerController@redirectMiCuenta');

//para ver los trainers en version admin
Route::get('trainingAdmin','TrainingController@listTrainingsAdmin');

Route::get('addTraining','TrainingController@addTraining');
Route::post('insertTraining','TrainingController@insertTraining');

Route::get('modifyTraining/{id}','TrainingController@modifyTraining');
Route::post('modifyTraining/{id}','TrainingController@modifyTraining');

Route::get('deleteTraining/{id}','TrainingController@deleteTraining');
Route::post('deleteTraining/{id}','TrainingController@deleteTraining');
