<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClearanceController extends Controller
{
    public function index(){
        return view('clearance');
    }

    public function show(Request $request){
        $column = $request->get('column', 'StudentID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;
        $data = DB::table('student')->orderBy($column, $direction)->paginate($perPage);

        $column1 = $request->get('column1', 'EmployeeID'); // Default column to sort
        $direction1 = $request->get('direction1', 'asc'); // Default sorting direction
        $clearance_emp_view = DB::table('employee')->orderBy($column1, $direction1)->paginate($perPage);

        return view('clearance', [
            'clearanceview' => $data,
            'column' => $column,
            'direction' => $direction,
            'clearance_emp_view' => $clearance_emp_view,
            'column1' => $column1,
            'direction1' => $direction1
        ]);
    }

    public function search_clearance(Request $request){
        // Student
            $searchTerm = $request->input('search');
            $perPage = 10;
            $column = $request->get('column', 'StudentID'); // Default column to sort
            $direction = $request->get('direction', 'asc'); // Default sorting direction

            $clearanceview = DB::table('student')->where(function ($query) use ($searchTerm) {
                $query->where('StudentID', 'like', "%$searchTerm%")
                    ->orWhere('StudentFName', 'like', "%$searchTerm%")
                    ->orWhere('StudentIName', 'like', "%$searchTerm%")
                    ->orWhere('StudentLName', 'like', "%$searchTerm%")
                    ->orWhere('Department', 'like', "%$searchTerm%");
            })->orderBy($column, $direction)->paginate($perPage);

            // Append search term to pagination links
            $clearanceview->appends(['search' => $searchTerm]);

        // Employee
            $searchTerm1 = $request->input('search_emp');
            $perPage = 10;
            $column1 = $request->get('column1', 'EmployeeID'); // Default column to sort
            $direction1 = $request->get('direction1', 'asc'); // Default sorting direction

            $clearance_emp_view = DB::table('employee')->where(function ($query) use ($searchTerm1) {
                $query->where('EmployeeID', 'like', "%$searchTerm1%")
                    ->orWhere('EmployeeFName', 'like', "%$searchTerm1%")
                    ->orWhere('EmployeeIName', 'like', "%$searchTerm1%")
                    ->orWhere('EmployeeLName', 'like', "%$searchTerm1%")
                    ->orWhere('Department', 'like', "%$searchTerm1%");
            })->orderBy($column1, $direction1)->paginate($perPage);

            // Append search term to pagination links
            $clearance_emp_view->appends(['search_emp' => $searchTerm1]);

        return view('clearance', compact('clearanceview', 'clearance_emp_view', 'searchTerm', 'column', 'direction', 'searchTerm1', 'column1', 'direction1'));
    }

}
