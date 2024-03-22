<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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
    return view('welcome');
});

/* ROUTE FOR DASHBOARD */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard', [DeviceController::class, 'count'])->name('dashboard');
/*---------------------------------------------------------------------*/

/* ITS Inventory Routes */
Route::get('/device', function () {
    return view('device');
})->middleware(['auth'])->name('device');

Route::get('/cablesandperipherals', function () {
    return view('cablesandperipherals');
})->middleware(['auth'])->name('cablesandperipherals');

Route::get('/consumables', function () {
    return view('consumables');
})->middleware(['auth'])->name('consumables');
/*---------------------------------------------------------------------*/

/* ITS Management Routes */

Route::get('/managementdevice', function () {
    return view('managementdevice');
})->middleware(['auth'])->name('managementdevice');

Route::get('/managementcablesandperipherals', function () {
    return view('managementcablesandperipherals');
})->middleware(['auth'])->name('managementcablesandperipherals');

Route::get('/managementconsumables', function () {
    return view('managementconsumables');
})->middleware(['auth'])->name('managementconsumables');
/*---------------------------------------------------------------------*/

/* ITS Employee Accountability Routes */

Route::get('/itsemployeeaccountabilitydevice', function () {
    return view('itsemployeeaccountabilitydevice');
})->middleware(['auth'])->name('itsemployeeaccountabilitydevice');
/*---------------------------------------------------------------------*/

/* AH Inventory Routes */
Route::get('/equipments', function () {
    return view('equipments');
})->middleware(['auth'])->name('equipments');

Route::get('/reagents', function () {
    return view('reagents');
})->middleware(['auth'])->name('reagents');

Route::get('/ahconsumables', function () {
    return view('ahconsumables');
})->middleware(['auth'])->name('ahconsumables');
/*---------------------------------------------------------------------*/

/* AH Management Routes */

Route::get('/managementequipments', function () {
    return view('managementequipments');
})->middleware(['auth'])->name('managementequipments');

Route::get('/managementreagents', function () {
    return view('managementreagents');
})->middleware(['auth'])->name('managementreagents');

Route::get('/ahmanagementconsumables', function () {
    return view('ahmanagementconsumables');
})->middleware(['auth'])->name('ahmanagementconsumables');
/*---------------------------------------------------------------------*/

// Routes for Adding Device

Route::get('/device', [DeviceController::class,'index']);
Route::post('add',[DeviceController::Class,'add']);
/*---------------------------------------------------------------------*/

/* Routes for VIEW TABLE Display Devices from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('device',[DeviceController::class,'show']);
/*---------------------------------------------------------------------*/


/* Routes for DEVICEDETAILS.BLADE.PHP */
Route::get('/devicedetails', function () {
    return view('devicedetails');
})->middleware(['auth'])->name('devicedetails');
/*---------------------------------------------------------------------*/

/* Route for VIEW Device Details MODAL DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('devicedetails/{id}',[DeviceController::class,'details']);
/*---------------------------------------------------------------------*/

/* Routes for DEVICEEDIT.BLADE.PHP */
Route::get('/deviceedit', function () {
    return view('deviceedit');
})->middleware(['auth'])->name('deviceedit');
/*---------------------------------------------------------------------*/

/* Route for EDIT Device Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('deviceedit/{id}',[DeviceController::class,'edit']);
/*---------------------------------------------------------------------*/

/* UPDATING DATA */
// Route::post('ACTION',[CONTROLLER::class,'FUNCTION']);
Route::put('update_device/{id}',[DeviceController::class,'update']);
/*---------------------------------------------------------------------*/

/* SOFT DELETE DATA */
Route::delete('device/{id}', [DeviceController::class, 'softDelete'])->name('devices.soft-delete');
/*---------------------------------------------------------------------*/

/* SEARCH DEVICE */

Route::get('search_device',[DeviceController::Class, 'search_device']);


//

Route::get('try', function () {
    return view('try');
})->middleware(['auth'])->name('try');
