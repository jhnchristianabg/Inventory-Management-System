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

        $request->validate([
            'EmployeeID'=> 'required',
            'EmployeeFName'=> 'required',
            'EmployeeIName'=> 'required',
            'EmployeeLName'=> 'required',
            'Email'=> 'required',
            'Department'=> 'required',
            'Status'=>'required',
        ]);

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

        // This part of the code will never execute as the return statement above ends the function execution
        if($query){
            return back()->with('success',' ');
        }else{
            return back()->with('failed',' ');
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

    public function search_employee($id,Request $request){
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

    public function details_empacc($id,Request $request){

        $searchTerm = $request->input('search_emp_details');
        $perPage = 1000;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $empdetails= DB::select('select * from employee where id = ?', [$id]);

        $emp_dev_acc = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'updated_at', 'DeviceLocation', 'is_accountability')
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
                    ->orWhere('updated_at', 'like', "%$searchTerm%")
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

        // return view('Blade', compact('Variable'));
        return view('empaccview', ['empdetails'=>$empdetails,'emp_dev_acc' => $emp_dev_acc]);
    }

    public function edit_emp($id){
        // $Variable = DB::table('table name')->find($id);
       $employee = DB::table('employee')->find($id);
       return view ('employeeedit',compact('employee'));
    }

    /* -------------- ENDS HERE  -------------- */


}
