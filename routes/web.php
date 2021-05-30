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

Route::get('MiCuenta','MiCuentaController@menuCuenta');


Route::get('trainersAdmin','TrainerController@listTrainers');
Route::get('addTrainer','TrainerController@addTrainer');

Route::post('insertTrainer','TrainerController@insertTrainer');


Route::get('modifyTrainer/{id}','TrainerController@modifyTrainer');
Route::post('modifyTrainer/{id}','TrainerController@modifyTrainer');


//para borrar trainer
Route::get('deleteTrainer/{id}','TrainerController@deleteTrainer');
Route::post('deleteTrainer/{id}','TrainerController@deleteTrainer');

//para ver la página de mi cuenta
Route::get('menuAdmin','MiCuentaController@menuAdmin');

//para ver los trainers en version admin

Route::get('listTrainingsAdmin','TrainingController@listTrainingsAdmin');

Route::get('addTraining','TrainingController@addTraining');
Route::post('insertTraining','TrainingController@insertTraining');

Route::get('modifyTraining/{id}','TrainingController@modifyTraining');
Route::post('modifyTraining/{id}','TrainingController@modifyTraining');

Route::get('deleteTraining/{id}','TrainingController@deleteTraining');
Route::post('deleteTraining/{id}','TrainingController@deleteTraining');

//para ver las machines en version admin

Route::get('maquinasAdmin','MachineController@listMachinesAdmin');

Route::get('deleteMachine/{id}','MachineController@deleteMachine');
Route::post('deleteMachine/{id}','MachineController@deleteMachine');

//salas
Route::get('salasAdmin','RoomController@listRooms');

Route::get('deleteRoom/{id}','RoomController@deleteRoom');
Route::post('deleteRoom/{id}','RoomController@deleteRoom');

Route::get('viewOneRoom/{id}','RoomController@viewOneRoom');
Route::post('viewOneRoom/{id}','RoomController@viewOneRoom');

Route::get('viewOneTrainer/{id}','TrainerController@viewOneTrainer');
Route::post('viewOneTrainer/{id}','TrainerController@viewOneTrainer');

Route::get('vistaRegistrarUsuario','ClientController@register');

/*
Route::get('vistaUsuarioRegistrado','ClientController@addUser');
Route::post('vistaUsuarioRegistrado','ClientController@addUser');
*/

Route::get('sobreNosotros','TrainingController@sobreNosotros');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//para ver un cliente solo
Route::get('viewOneClient/{id}','ClientController@viewOneClient');
Route::post('viewOneClient/{id}','ClientController@viewOneClient');


// RentalMaterial

Route::get('materiales','MaterialController@listRentalMaterial');
Route::get('AlquilarMateriales/{idCliente}/{idMaterial}','MaterialController@alquilarMaterial');
Route::post('AlquilarMateriales/{idCliente}/{idMaterial}','MaterialController@alquilarMaterial');

//para apuntarse a una clase.
Route::get('apuntarseAUnaClase/{idClase}/{idClient}','ClientController@apuntarseAUnaClase');
Route::post('apuntarseAUnaClase/{idClase}/{idClient}','ClientController@apuntarseAUnaClase');


//para ver estadisticas
Route::get('estadisticas','TrainingController@estadisticas');
Route::post('estadisticas','TrainingController@estadisticas');
