<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EmployeeModel;


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

    public function details_empacc($id){
        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $empdetails= DB::select('select * from employee where id = ?', [$id]);
        // return view('Blade', compact('Variable'));
        return view('empaccview', ['empdetails'=>$empdetails]);
    }
}
