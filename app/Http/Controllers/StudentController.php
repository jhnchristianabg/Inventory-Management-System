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
        $stud = array();
        $stud = DB::table('student')->where('StudentID', $request->input('StudentID'))->exists();

        // Check if the device serial number already exists
        if ($stud) {
            return redirect('/itsaccountabilitystudent')->with('failed', ' ');
        } else {

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
            return redirect('/itsaccountabilitystudent')->with('success',' ');
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

    public function details_studacc($id,Request $request){

        // This is for Borrowed

            $searchTerm = $request->input('search_emp_details');
            $perPage = 1000;
            $column = $request->get('column', 'id'); // Default column to sort
            $direction = $request->get('direction', 'asc'); // Default sorting direction

            // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
            $studdetails= DB::select('select * from student where id = ?', [$id]);

            $stud_dev_acc = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'issue_date', 'DeviceLocation', 'is_accountability')
            ->whereIn('is_accountability', function($query) {
                $query->select('StudentID')
                    ->from('student');
                })
            ->paginate(1000);

            $stud_dev_acc = DB::table('devices')
                ->where(function ($query) use ($searchTerm) {
                    $query->where('DeviceID', 'like', "%$searchTerm%")
                        ->orWhere('id', 'like', "%$searchTerm%")
                        ->orWhere('DeviceType', 'like', "%$searchTerm%")
                        ->orWhere('DeviceBrand', 'like', "%$searchTerm%")
                        ->orWhere('issue_date', 'like', "%$searchTerm%")
                        ->orWhere('DeviceLocation', 'like', "%$searchTerm%");
                })
                ->whereIn('is_accountability', function($query) {
                    $query->select('StudentID')
                        ->from('student');
                })
                ->orderBy($column, $direction)
                ->paginate($perPage);

            // Append search term to pagination links
            $stud_dev_acc->appends(['search' => $searchTerm]);

        // Borrowed Ends Here

        // This is for Returned

            $searchTerm_returned = $request->input('search_emp_details_returned');
            $perPage = 1000;
            $column = $request->get('column', 'id'); // Default column to sort
            $direction = $request->get('direction', 'asc'); // Default sorting direction

            // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
            $studdetails= DB::select('select * from student where id = ?', [$id]);

            $stud_dev_acc_returned = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'issue_date', 'DeviceLocation', 'is_accountability')
            ->whereIn('is_accountability', function($query) {
                $query->select('StudentID')
                    ->from('student');
                })
            ->paginate(1000);

            $stud_dev_acc_returned = DB::table('accountability_logs')
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
                $query->select('StudentID')
                    ->from('student');
            })
            ->orderBy($column, $direction)
            ->paginate($perPage);

            // Append search term to pagination links
            $stud_dev_acc_returned->appends(['search' => $searchTerm]);

        // Returned Ends Here


        // return view('Blade', compact('Variable'));
        return view('studaccview', ['studdetails'=>$studdetails,'stud_dev_acc' => $stud_dev_acc,
        'searchTerm_returned' => $searchTerm_returned, 'stud_dev_acc_returned' => $stud_dev_acc_returned]);
    }

    // EDITING EMPLOYEE DETAILS
    public function edit_stud($id){
        // $Variable = DB::table('table name')->find($id);
       $student = DB::table('student')->find($id);
       return view ('studentedit',compact('student'));
    }

    // UPDATING EMPLOYEE DETAILS
    public function update_stud(Request $request, $id){

        $stud_edit = array();
        // Check if the device with the given serial number already exists
        $stud_edit = DB::table('student')->where('StudentID', $request->input('StudentID'))->first();

        // If the device with the given serial number exists and it's not the device being edited
        if ($stud_edit && $stud_edit->id != $id) {
            return redirect('/itsaccountabilitystudent')->with('failed_update', ' ');
        } else {

            $employee = DB::table('student')->where('id',$id)->update([
                'StudentID'=> $request['StudentID'],
                'Department'=> $request['Department'],
                'Year'=> $request['Year'],
                'StudentFName'=> $request['StudentFName'],
                'StudentIName'=> $request['StudentIName'],
                'StudentLName'=> $request['StudentLName'],
                'Email'=> $request['Email'],
                'updated_at' => now()
            ]);

            return redirect('/itsaccountabilitystudent')->with('update',' ');
        }
    }

    // VIEW INSIDE EMPLOYEE ABOUT THE DEVICE DETAILS
    public function details_stud($id){
        $studaccdev_details = DB::table('devices')->find($id);
        $studaccdev_specs = DB::table('device_specs')->find($id);
        $studaccdev_pd = DB::table('device_purchase_details')->find($id);
        return view ('studaccdevice',compact('studaccdev_details','studaccdev_specs','studaccdev_pd'));
    }

    public function return_stud(Request $request, $id){

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
            'DeviceWarranty'
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

        $studaccdev_details = DB::table('devices')->where('id',$id)->update([
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
            'is_accountability' => NULL
        ]);

        $studaccdev_specs = DB::table('device_specs')->where('id',$id)->update([
            'DeviceOperatingSys' => $request['DeviceOperatingSys'],
            'DeviceProductKey' => $request['DeviceProductKey'],
            'DeviceProcessor' => $request['DeviceProcessor'],
            'DeviceMemory' => $request['DeviceMemory'],
            'DeviceSize'=> $request['DeviceSize'],
            'DeviceStorage1' => $request['DeviceStorage1'],
            'DeviceStorage2' => $request['DeviceStorage2']
        ]);

        $studaccdev_pd = DB::table('device_purchase_details')->where('id',$id)->update([
            'DevicePriceprunit' => $request['DevicePriceprunit'],
            'DeviceSupplier' => $request['DeviceSupplier'],
            'DeviceDateOfPurch' => $request['DeviceDateOfPurch'],
            'DeviceWarranty' => $request['DeviceWarranty']
        ]);


        return redirect('/itsaccountabilitystudent')->with('return', ' ');
    }



    /* -------------- ENDS HERE  -------------- */


}
