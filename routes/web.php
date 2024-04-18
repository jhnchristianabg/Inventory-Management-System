<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CPController;
use App\Http\Controllers\ConsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CPReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DeviceAccController;
use App\Http\Controllers\LocationController;

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
    return view('auth/login');
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

/* ITS Employee Accountability DEVICE Routes */

Route::get('/itsemployeeaccountabilitydevice', function () {
    return view('itsemployeeaccountabilitydevice');
})->middleware(['auth'])->name('itsemployeeaccountabilitydevice');
/*---------------------------------------------------------------------*/

/* ITS Employee Accountability EMPLOYEE Routes */

Route::get('/itsaccountabilitystudent', function () {
    return view('itsaccountabilitystudent');
})->middleware(['auth'])->name('itsaccountabilitystudent');
/*---------------------------------------------------------------------*/
/* ITS Employee Accountability EMPLOYEE Routes */

Route::get('/itsemployeeaccountabilityemployee', function () {
    return view('itsemployeeaccountabilityemployee');
})->middleware(['auth'])->name('itsemployeeaccountabilityemployee');
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

/* Routes for VIEW TABLE Display Devices from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('device', [DeviceController::class, 'show'])->name('device.show');

/* Routes for DEVICEDETAILS.BLADE.PHP */
Route::get('/devicedetails', function () {
    return view('devicedetails');
})->middleware(['auth'])->name('devicedetails');

/* Route for VIEW Device Details MODAL DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('devicedetails/{id}',[DeviceController::class,'details']);

/* Routes for DEVICEEDIT.BLADE.PHP */
Route::get('/deviceedit', function () {
    return view('deviceedit');
})->middleware(['auth'])->name('deviceedit');

/* Route for EDIT Device Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('deviceedit/{id}',[DeviceController::class,'edit']);

/* UPDATING DATA */
// Route::post('ACTION',[CONTROLLER::class,'FUNCTION']);
Route::put('update_device/{id}',[DeviceController::class,'update']);

/* SOFT DELETE DATA */
Route::delete('device/{id}', [DeviceController::class, 'softDelete'])->name('devices.soft-delete');

/* SEARCH DEVICE */

Route::get('search_device',[DeviceController::Class, 'search_device']);

/*---------------------------------------------------------------------*/

//

Route::get('try', function () {
    return view('try');
})->middleware(['auth'])->name('try');




/*---------------------------------------------------------------------*/

// Routes for Adding CABLES AND PERIPHERALS

Route::get('/cablesandperipherals', [CPController::class,'index']);
Route::post('add_cp',[CPController::Class,'add_cp']);

/* Routes for VIEW TABLE Display Cables & Peripherals from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cablesandperipherals', [CPController::class, 'show_cp'])->name('cablesandperipherals.show');

/* SEARCH Cables & Peripherals */

Route::get('search_cp',[CPController::Class, 'search_cp']);

/* Routes for CPDETAILS.BLADE.PHP */
Route::get('/cpdetails', function () {
    return view('cpdetails');
})->middleware(['auth'])->name('cpdetails');

/* Route for VIEW CPDETAILS MODAL DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cpdetails/{id}',[CPController::class,'cp_details']);

/* Routes for CPEDIT.BLADE.PHP */
Route::get('/cpedit', function () {
    return view('cpedit');
})->middleware(['auth'])->name('cpedit');

/* Route for EDIT CABLES AND PERIPHERALS Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cpedit/{id}',[CPController::class,'cp_edit']);

/* UPDATING CABLES AND PERIPHERALS DATA */
// Route::post('ACTION',[CONTROLLER::class,'FUNCTION']);
Route::put('update_cablesandperipherals/{id}',[CPController::class,'cp_update']);

/* SOFT DELETE CABLES AND PERIPHERALS DATA */
Route::delete('cablesandperipherals/{id}', [CPController::class, 'cp_softDelete'])->name('cp.soft-delete');
/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/

// Routes for Adding CONSUMABLES

Route::get('/consumables', [ConsController::class,'index']);
Route::post('add_cons',[ConsController::Class,'add_cons']);

/* Routes for VIEW TABLE Display CONSUMABLES from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('consumables', [ConsController::class, 'show_cons'])->name('consumables.show');

/* SEARCH CONSUMABLES */
Route::get('search_cons',[ConsController::Class, 'search_cons']);

/* Routes for ConsDETAILS.BLADE.PHP */
Route::get('/consdetails', function () {
    return view('consdetails');
})->middleware(['auth'])->name('consdetails');

/* Route for VIEW ConsDETAILS MODAL DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('consdetails/{id}',[ConsController::class,'cons_details']);

/* Routes for ConsEDIT.BLADE.PHP */
Route::get('/consedit', function () {
    return view('consedit');
})->middleware(['auth'])->name('consedit');

/* Route for EDIT CONSUMABLES Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('consedit/{id}',[ConsController::class,'cons_edit']);

/* UPDATING CONSUMABLES DATA */
// Route::post('ACTION',[CONTROLLER::class,'FUNCTION']);
Route::put('update_consumables/{id}',[ConsController::class,'cons_update']);

/* SOFT DELETE CONSUMABLES DATA */
Route::delete('consumables/{id}', [ConsController::class, 'cons_softDelete'])->name('cons.soft-delete');
/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/
/* Report Generation */

Route::get('/report', [ReportController::class,'index']);

/* Report Generation SEARCH DEVICE */

Route::get('search_device_report',[ReportController::Class, 'search_device_report']);

/* Routes for Report Generation VIEW TABLE Display Devices from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('report', [ReportController::class, 'show_report'])->name('report.show');

/* Report Generation TABLE OF COUNTING DEVICES */
Route::get('countDevices', [ReportController::class, 'countDevices'])->name('countDevices');
/*---------------------------------------------------------------------*/

/*---------------------------------------------------------------------*/

Route::get('/cpreport', [CPReportController::class,'index']);

/* Report Generation SEARCH CABLES & PERIPHERALS */

Route::get('search_cp_report',[CPReportController::Class, 'search_cp_report']);

/* Routes for Report Generation VIEW TABLE Display CABLES & PERIPHERALS from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('cpreport', [CPReportController::class, 'show_cpreport'])->name('cpreport.show');

/* Report Generation TABLE OF COUNTING CABLES & PERIPHERALS */
Route::get('countCP', [CPReportController::class, 'countCP'])->name('countCP');
/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/
// Routes for Adding STUDENT

Route::get('/itsaccountabilitystudent', [StudentController::class,'index']);
Route::post('add_student',[StudentController::Class,'add_student']);

/* VIEW TABLE in Student */
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('/itsaccountabilitystudent', [StudentController::class, 'show_student'])->name('itsaccountabilitystudent.show');

/* SEARCH Student */
Route::get('search_student',[StudentController::Class, 'search_student']);

/* Route for EDIT STUDENT*/
Route::get('/studentedit', function () {
    return view('studentedit');
})->middleware(['auth'])->name('studentedit');

/* Route for EDIT STUDENT Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('studentedit/{id}',[StudentController::class,'edit_stud']);

// UPDATE THE EMPLOYEE
Route::put('update_student/{id}',[StudentController::class,'update_stud']);
/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/
// Routes for Adding EMPLOYEE

Route::get('/itsemployeeaccountabilityemployee', [EmployeeController::class,'index']);
Route::post('add_employee',[EmployeeController::Class,'add_employee']);

/* VIEW TABLE in EMPLOYEE */
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('/itsemployeeaccountabilityemployee', [EmployeeController::class, 'show_employee'])->name('itsemployeeaccountabilityemployee.show');

/* SEARCH Employee */

Route::get('search_employee',[EmployeeController::Class, 'search_employee']);

/* Routes for EMPLOYEE */
Route::get('/empaccview', function () {
    return view('empaccview');
})->middleware(['auth'])->name('empaccview');

/* Route for VIEW EMPLOYEE*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('empaccview/{id}',[EmployeeController::class,'details_empacc'])->name('empaccview');

/* Route for EDIT EMPLOYEE*/
Route::get('/employeeedit', function () {
    return view('employeeedit');
})->middleware(['auth'])->name('employeeedit');

/* Route for EDIT EMPLOYEE Details DB SHOW*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('employeeedit/{id}',[EmployeeController::class,'edit_emp']);

// UPDATE THE EMPLOYEE
Route::put('update_employee/{id}',[EmployeeController::class,'update_emp']);

// VIEW INSIDE EMPLOYEE
Route::get('/empaccdevice', function () {
    return view('empaccdevice');
})->middleware(['auth'])->name('empaccdevice');

// ROUTE FOR OPENNING empaccdevice.blade.php
Route::get('empaccdevice/{id}',[EmployeeController::class,'details_emp']);

// RETURNING DEVICE
Route::put('return_device/{id}',[EmployeeController::class,'return']);

/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/
// Route for Device Assign
Route::get('/itsemployeeaccountabilitydevice', [DeviceAccController::class, 'search_acc_device'])->name('itsemployeeaccountabilitydevice.show');

Route::get('/itsemployeeaccountabilitydevicemodal', [DeviceAccController::class, 'search_acc_device_modal'])->name('itsemployeeaccountabilitydevicemodal.show');

// UPDATE
Route::post('/update/devices', [DeviceAccController::class,'update'])->name('update.devices');

// SEARCH OUTSIDE THE MODAL
Route::get('/search_acc_device', [DeviceAccController::class, 'search_acc_device'])->name('search_acc_device');

// SEARCH INSIDE MODAL
Route::get('search_acc_device_modal', [DeviceAccController::class, 'search_acc_device_modal'])->name('search_acc_device_modal');



/*---------------------------------------------------------------------*/








/*---------------------------------------------------------------------*/
/* LOCATION */

Route::get('location', function () {
    return view('location');
})->middleware(['auth'])->name('location');

// Routes for Adding LOCATION

Route::get('/location', [LocationController::class,'index']);
Route::post('add_loc',[LocationController::Class,'add_loc']);

/* Routes for VIEW TABLE Display LOCATION from DB*/
// Route::get('BLADE NAME',[CONTROLLER::class,'FUNCTION']);
Route::get('location', [LocationController::class, 'show_loc'])->name('location.show');

/* SEARCH LOCATION */

Route::get('search_loc',[LocationController::Class, 'search_loc']);

// ACTION FOR LOCATION

Route::get('locationedit', function () {
    return view('locationedit');
})->middleware(['auth'])->name('locationedit');

// Edit location
Route::get('locationedit/{id}',[LocationController::class,'edit_loc']);

Route::put('update_location/{id}',[LocationController::class,'update_loc']);
