<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EmployeeModel;
use App\Models\DeviceModel;


class EmployeeController extends Controller
{
    public function index(){
        return view('itsemployeeaccountabilityemployee');
    }

    public function add_employee(Request $request){

        $emp = array();
        $emp = DB::table('employee')->where('EmployeeID', $request->input('EmployeeID'))->exists();

        // Check if the employee id already exists
        if ($emp) {
            return redirect('/itsemployeeaccountabilityemployee')->with('failed', ' ');
        } else {

            // Insert device details into the database
            $query = DB::table('employee')->insert([
                'EmployeeID'=>$request->input('EmployeeID'),
                'EmployeeFName'=>$request->input('EmployeeFName'),
                'EmployeeIName'=>$request->input('EmployeeIName'),
                'EmployeeLName'=>$request->input('EmployeeLName'),
                'Email'=>$request->input('Email'),
                'Department'=>$request->input('Department'),
                'Status'=>$request->input('Status')
            ]);

            return redirect('/itsemployeeaccountabilityemployee')->with('success',' ');
        }
    }

    public function show_employee(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $data = EmployeeModel::orderBy($column, $direction)->paginate($perPage);

        return view('itsemployeeaccountabilityemployee', [
            'employeeview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_employee(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $employeeview = EmployeeModel::where(function ($query) use ($searchTerm) {
            $query->where('EmployeeID', 'like', "%$searchTerm%")
                  ->orWhere('EmployeeFName', 'like', "%$searchTerm%")
                  ->orWhere('EmployeeLName', 'like', "%$searchTerm%")
                  ->orWhere('Department', 'like', "%$searchTerm%")
                  ->orWhere('Email', 'like', "%$searchTerm%")
                  ->orWhere('Status', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        return view('itsemployeeaccountabilityemployee', compact('employeeview', 'searchTerm', 'column', 'direction'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    // VIEW OF ALL ACCOUNTABILITY DEVICES ON SPECIFIC EMPLOYEE
    public function details_empacc($id,Request $request){
        // This is for Borrowed
            $searchTerm = $request->input('search_emp_details');
            $perPage = 1000;
            $column = $request->get('column', 'id'); // Default column to sort
            $direction = $request->get('direction', 'asc'); // Default sorting direction

            // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
            $empdetails= DB::select('select * from employee where id = ?', [$id]);

            $emp_dev_acc = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'issue_date', 'DeviceLocation', 'is_accountability')
            ->whereIn('is_accountability', function($query) {
                $query->select('EmployeeID')
                    ->from('employee');
                })
            ->paginate(1000);

            $emp_dev_acc = DB::table('devices')
                ->where(function ($query) use ($searchTerm) {
                    $query->where('DeviceID', 'like', "%$searchTerm%")
                        ->orWhere('id', 'like', "%$searchTerm%")
                        ->orWhere('DeviceType', 'like', "%$searchTerm%")
                        ->orWhere('DeviceBrand', 'like', "%$searchTerm%")
                        ->orWhere('issue_date', 'like', "%$searchTerm%")
                        ->orWhere('DeviceLocation', 'like', "%$searchTerm%");
                })
                ->whereIn('is_accountability', function($query) {
                    $query->select('EmployeeID')
                        ->from('employee');
                })
                ->orderBy($column, $direction)
                ->paginate($perPage);

            // Append search term to pagination links
            $emp_dev_acc->appends(['search' => $searchTerm]);
        // Borrowed Ends Here

        // This is for Returned
            $searchTerm_returned = $request->input('search_emp_details_returned');
            $perPage = 1000;
            $column = $request->get('column', 'id'); // Default column to sort
            $direction = $request->get('direction', 'asc'); // Default sorting direction

            // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
            $empdetails= DB::select('select * from employee where id = ?', [$id]);

            $emp_dev_acc_returned = DB::table('accountability_logs')->select('id', 'HostID', 'Type', 'Brand', 'Location', 'issue_date', 'return_date', 'is_accountability')
            ->whereIn('is_accountability', function($query) {
                $query->select('EmployeeID')
                    ->from('employee');
                })
            ->paginate(1000);

            $emp_dev_acc_returned = DB::table('accountability_logs')
                ->where(function ($query) use ($searchTerm_returned) {
                    $query->where('id', 'like', "%$searchTerm_returned%")
                        ->orWhere('HostID', 'like', "%$searchTerm_returned%")
                        ->orWhere('Type', 'like', "%$searchTerm_returned%")
                        ->orWhere('Brand', 'like', "%$searchTerm_returned%")
                        ->orWhere('Location', 'like', "%$searchTerm_returned%")
                        ->orWhere('issue_date', 'like', "%$searchTerm_returned%")
                        ->orWhere('return_date', 'like', "%$searchTerm_returned%");
                })
                ->whereIn('is_accountability', function($query) {
                    $query->select('EmployeeID')
                        ->from('employee');
                })
                ->orderBy($column, $direction)
                ->paginate($perPage);

            // Append search term to pagination links
            $emp_dev_acc_returned->appends(['search' => $searchTerm_returned]);
        // Returned Ends Here

        // return view('Blade', compact('Variable'));
        return view('empaccview', ['empdetails'=>$empdetails,'emp_dev_acc' => $emp_dev_acc,
        'searchTerm_returned' => $searchTerm_returned, 'emp_dev_acc_returned' => $emp_dev_acc_returned]);
    }

    // EDITING EMPLOYEE DETAILS
    public function edit_emp($id){
        // $Variable = DB::table('table name')->find($id);
       $employee = DB::table('employee')->find($id);
       return view ('employeeedit',compact('employee'));
    }

    // UPDATING EMPLOYEE DETAILS
    public function update_emp(Request $request, $id){
        $emp_edit = array();
        // Check if the device with the given serial number already exists
        $emp_edit = DB::table('employee')->where('EmployeeID', $request->input('EmployeeID'))->first();

        // If the device with the given serial number exists and it's not the device being edited
        if ($emp_edit && $emp_edit->id != $id) {
            return redirect('/itsemployeeaccountabilityemployee')->with('failed_update', ' ');
        } else {
            $employee = DB::table('employee')->where('id',$id)->update([
                'EmployeeID'=> $request['EmployeeID'],
                'Department'=> $request['Department'],
                'Status'=> $request['Status'],
                'EmployeeFName'=> $request['EmployeeFName'],
                'EmployeeIName'=> $request['EmployeeIName'],
                'EmployeeLName'=> $request['EmployeeLName'],
                'Email'=> $request['Email'],
                'updated_at' => now()
            ]);

            return redirect('/itsemployeeaccountabilityemployee')->with('update',' ');
        }
    }

    // VIEW INSIDE EMPLOYEE ABOUT THE DEVICE DETAILS
    public function details_emp($id){
        $data_location = DB::table('locations')->get();
        $empaccdev_details = DB::table('devices')->find($id);
        $empaccdev_specs = DB::table('device_specs')->find($id);
        $empaccdev_pd = DB::table('device_purchase_details')->find($id);
        return view ('empaccdevice',compact('empaccdev_details','empaccdev_specs','empaccdev_pd', 'data_location'));
    }

    public function return(Request $request, $id){

        $request->validate([
            'DeviceID'=> 'required',
            'DeviceType',
            'DeviceName'=> 'required',
            'DeviceBrand'=> 'required',
            'DeviceModel'=> 'required',
            'DeviceSerialNo',
            'DeviceMacAdd',
            'DeviceLocation'=> 'required',
            'DeviceStatus',
            'DeviceRemarks',
            'DeviceOperatingSys',
            'DeviceProductKey',
            'DeviceProcessor',
            'DeviceMemory',
            'DeviceSize',
            'DeviceStorage1',
            'DeviceStorage2',
            'DevicePriceprunit'=> 'required',
            'DeviceSupplier'=> 'required',
            'DeviceDateOfPurch'=> 'required',
            'DeviceWarranty',
            'issue_date',
            'is_accountability'
        ]);

        DB::table('accountability_logs')->where('id',$id)->insert([
            'HostID' => $request['DeviceID'],
            'Type' => $request['DeviceType'],
            'Brand' => $request['DeviceBrand'],
            'issue_date' => $request['issue_date'],
            'return_date' => now(),
            'Location' => $request['DeviceLocation'],
            'is_accountability' => $request['is_accountability']

        ]);

        $empaccdev_details = DB::table('devices')->where('id',$id)->update([
            'DeviceID' => 'STRG',
            'DeviceType' => $request['DeviceType'],
            'DeviceName' => $request['DeviceName'],
            'DeviceBrand' => $request['DeviceBrand'],
            'DeviceModel' => $request['DeviceModel'],
            'DeviceSerialNo' => $request['DeviceSerialNo'],
            'DeviceMacAdd' => $request['DeviceMacAdd'],
            'DeviceLocation' => 'Storage',
            'DeviceStatus' => $request['DeviceStatus'],
            'DeviceRemarks' => $request['DeviceRemarks'],
            'is_accountability' => NULL,
            'issue_date' => NULL
        ]);

        $empaccdev_specs = DB::table('device_specs')->where('id',$id)->update([
            'DeviceOperatingSys' => $request['DeviceOperatingSys'],
            'DeviceProductKey' => $request['DeviceProductKey'],
            'DeviceProcessor' => $request['DeviceProcessor'],
            'DeviceMemory' => $request['DeviceMemory'],
            'DeviceSize'=> $request['DeviceSize'],
            'DeviceStorage1' => $request['DeviceStorage1'],
            'DeviceStorage2' => $request['DeviceStorage2']
        ]);

        $empaccdev_pd = DB::table('device_purchase_details')->where('id',$id)->update([
            'DevicePriceprunit' => $request['DevicePriceprunit'],
            'DeviceSupplier' => $request['DeviceSupplier'],
            'DeviceDateOfPurch' => $request['DeviceDateOfPurch'],
            'DeviceWarranty' => $request['DeviceWarranty']
        ]);

        return redirect('itsemployeeaccountabilityemployee')->with('return', ' ');
    }



    /* -------------- ENDS HERE  -------------- */


}
