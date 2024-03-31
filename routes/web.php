<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CPController;
use App\Http\Controllers\ConsController;

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
Route::get('device', [DeviceController::class, 'show'])->name('device.show');
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

/*---------------------------------------------------------------------*/
/* Report Generation */

Route::get('report', function () {
    return view('report');
})->middleware(['auth'])->name('report');
/*---------------------------------------------------------------------*/

//

Route::get('try', function () {
    return view('try');
})->middleware(['auth'])->name('try');


/* LOCATION */

Route::get('location', function () {
    return view('location');
})->middleware(['auth'])->name('location');

Route::post('location',[DeviceController::Class,'addloc'])->name('add.location');

/*---------------------------------------------------------------------*/

// Routes for Adding CABLES AND PERIPHERALS

Route::get('/cablesandperipherals', [CPController::class,'index']);
Route::post('add_cp',[CPController::Class,'add_cp']);
/*---------------------------------------------------------------------*/

/* Routes for VIEW TABLE Display Cables & Peripherals from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cablesandperipherals', [CPController::class, 'show_cp'])->name('cablesandperipherals.show');
/*---------------------------------------------------------------------*/

/* SEARCH Cables & Peripherals */

Route::get('search_cp',[CPController::Class, 'search_cp']);

/*---------------------------------------------------------------------*/

/* Routes for CPDETAILS.BLADE.PHP */
Route::get('/cpdetails', function () {
    return view('cpdetails');
})->middleware(['auth'])->name('cpdetails');
/*---------------------------------------------------------------------*/

/* Route for VIEW CPDETAILS MODAL DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cpdetails/{id}',[CPController::class,'cp_details']);
/*---------------------------------------------------------------------*/

/* Routes for CPEDIT.BLADE.PHP */
Route::get('/cpedit', function () {
    return view('cpedit');
})->middleware(['auth'])->name('cpedit');
/*---------------------------------------------------------------------*/

/* Route for EDIT CABLES AND PERIPHERALS Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cpedit/{id}',[CPController::class,'cp_edit']);
/*---------------------------------------------------------------------*/

/* UPDATING CABLES AND PERIPHERALS DATA */
// Route::post('ACTION',[CONTROLLER::class,'FUNCTION']);
Route::put('update_cablesandperipherals/{id}',[CPController::class,'cp_update']);
/*---------------------------------------------------------------------*/

/* SOFT DELETE CABLES AND PERIPHERALS DATA */
Route::delete('cablesandperipherals/{id}', [CPController::class, 'cp_softDelete'])->name('cp.soft-delete');
/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/

// Routes for Adding CONSUMABLES

Route::get('/consumables', [ConsController::class,'index']);
Route::post('add_cons',[ConsController::Class,'add_cons']);
/*---------------------------------------------------------------------*/

/* Routes for VIEW TABLE Display CONSUMABLES from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('consumables', [ConsController::class, 'show_cons'])->name('consumables.show');
/*---------------------------------------------------------------------*/

/* SEARCH CONSUMABLES */

Route::get('search_cons',[ConsController::Class, 'search_cons']);

/*---------------------------------------------------------------------*/

/* Routes for ConsDETAILS.BLADE.PHP */
Route::get('/consdetails', function () {
    return view('consdetails');
})->middleware(['auth'])->name('consdetails');
/*---------------------------------------------------------------------*/

/* Route for VIEW ConsDETAILS MODAL DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('consdetails/{id}',[ConsController::class,'cons_details']);
/*---------------------------------------------------------------------*/

/* Routes for ConsEDIT.BLADE.PHP */
Route::get('/consedit', function () {
    return view('consedit');
})->middleware(['auth'])->name('consedit');
/*---------------------------------------------------------------------*/

/* Route for EDIT CONSUMABLES Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('consedit/{id}',[ConsController::class,'cons_edit']);
/*---------------------------------------------------------------------*/

/* UPDATING CONSUMABLES DATA */
// Route::post('ACTION',[CONTROLLER::class,'FUNCTION']);
Route::put('update_consumables/{id}',[ConsController::class,'cons_update']);
/*---------------------------------------------------------------------*/

/* SOFT DELETE CONSUMABLES DATA */
Route::delete('consumables/{id}', [ConsController::class, 'cons_softDelete'])->name('cons.soft-delete');
/*---------------------------------------------------------------------*/
