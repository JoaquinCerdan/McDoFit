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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});


Route::get('training','TrainingController@listTrainings');
Route::get('maquinas','MachineController@listMachines');
Route::get('trainersAdmin','TrainerController@listTrainers');
Route::get('addTrainer','TrainerController@addTrainer');

Route::post('insertTrainer','TrainerController@insertTrainer');


Route::get('modifyTrainer/{id}','TrainerController@modifyTrainer');
Route::post('modifyTrainer/{id}','TrainerController@modifyTrainer');


//para borrar
Route::get('deleteTrainer/{id}','TrainerController@deleteTrainer');
Route::post('deleteTrainer/{id}','TrainerController@deleteTrainer');
