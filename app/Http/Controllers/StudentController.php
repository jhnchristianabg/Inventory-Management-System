<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EmployeeModel;
use App\Models\DeviceModel;


class StudentController extends Controller
{
    public function index(){
        return view('itsaccountabilitystudent');
    }

    public function add_student(Request $request){

        $request->validate([
            'StudentID'=> 'required',
            'StudentFName'=> 'required',
            'StudentIName'=> 'required',
            'StudentLName'=> 'required',
            'Email'=> 'required',
            'Department'=> 'required',
            'Year'=>'required',
        ]);

        // Insert device details into the database
        $query = DB::table('student')->insert([
            'StudentID'=>$request->input('StudentID'),
            'StudentFName'=>$request->input('StudentFName'),
            'StudentIName'=>$request->input('StudentIName'),
            'StudentLName'=>$request->input('StudentLName'),
            'Email'=>$request->input('Email'),
            'Department'=>$request->input('Department'),
            'Year'=>$request->input('Year')
        ]);

        // This part of the code will never execute as the return statement above ends the function execution
        if($query){
            return back()->with('success',' ');
        }else{
            return back()->with('failed',' ');
        }
    }

    public function show_student(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $data = DB::table('student')->orderBy($column, $direction)->paginate($perPage);

        return view('itsaccountabilitystudent', [
            'studentview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_student(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $studentview = DB::table('student')->where(function ($query) use ($searchTerm) {
            $query->where('StudentID', 'like', "%$searchTerm%")
                  ->orWhere('StudentFName', 'like', "%$searchTerm%")
                  ->orWhere('StudentLName', 'like', "%$searchTerm%")
                  ->orWhere('Department', 'like', "%$searchTerm%")
                  ->orWhere('Email', 'like', "%$searchTerm%")
                  ->orWhere('Year', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        return view('itsaccountabilitystudent', compact('studentview', 'searchTerm', 'column', 'direction'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    // EDITING EMPLOYEE DETAILS
    public function edit_stud($id){
        // $Variable = DB::table('table name')->find($id);
       $student = DB::table('student')->find($id);
       return view ('studentedit',compact('student'));
    }

    // UPDATING EMPLOYEE DETAILS
    public function update_stud(Request $request, $id){
        //
        $request->validate([
            'StudentID'=> 'required',
            'Department'=> 'required',
            'Year'=> 'required',
            'StudentFName'=> 'required',
            'StudentIName'=> 'required',
            'StudentLName'=> 'required',
            'Email'=> 'required'
        ]);

        $employee = DB::table('student')->where('id',$id)->update([
            'StudentID'=> $request['StudentID'],
            'Department'=> $request['Department'],
            'Year'=> $request['Year'],
            'StudentFName'=> $request['StudentFName'],
            'StudentIName'=> $request['StudentIName'],
            'StudentLName'=> $request['StudentLName'],
            'Email'=> $request['Email']
        ]);


        return redirect('/itsaccountabilitystudent')->with('update',' ');
    }


}
