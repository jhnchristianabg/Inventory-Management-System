<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DeviceModel;

class RepairHistory extends Controller
{
    public function index(){
        return view('repairhistory');
    }

    public function show(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $data = DeviceModel::orderBy($column, $direction)->paginate($perPage);

        return view('repairhistory', [
            'deviceview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_device(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $deviceview = DeviceModel::where(function ($query) use ($searchTerm) {
            $query->where('id', 'like', "%$searchTerm%")
                  ->orWhere('DeviceType', 'like', "%$searchTerm%")
                  ->orWhere('DeviceName', 'like', "%$searchTerm%")
                  ->orWhere('DeviceBrand', 'like', "%$searchTerm%")
                  ->orWhere('DeviceModel', 'like', "%$searchTerm%")
                  ->orWhere('DeviceSerialNo', 'like', "%$searchTerm%")
                  ->orWhere('DeviceStatus', 'like', "%$searchTerm%")
                  ->orWhere('DeviceRemarks', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        // Append search term to pagination links
        $deviceview->appends(['search' => $searchTerm]);

        return view('repairhistory', compact('deviceview', 'searchTerm', 'column', 'direction'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    public function repair_details($id,Request $request){

            $searchTerm1 = $request->input('search_devices');
            $perPage = 1000;
            $column1 = $request->get('column1', 'issue_date'); // Default column to sort
            $direction1 = $request->get('direction1', 'asc'); // Default sorting direction

            // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
            $repairdevices= DB::select('select * from devices where id = ?', [$id]);

            $repairdetails = DB::table('repair_history')->select('id', 'Type', 'Name', 'SerialNo', 'Remarks', 'Status', 'Defect', 'issue_date', 'repair_date')
            ->paginate(1000);

            $repairdetails = DB::table('repair_history')
                ->where(function ($query) use ($searchTerm1) {
                    $query->where('id', 'like', "%$searchTerm1%")
                        ->orWhere('issue_date', 'like', "%$searchTerm1%")
                        ->orWhere('repair_date', 'like', "%$searchTerm1%")
                        ->orWhere('Remarks', 'like', "%$searchTerm1%")
                        ->orWhere('Defect', 'like', "%$searchTerm1%")
                        ->orWhere('Status', 'like', "%$searchTerm1%");
                })
                ->orderBy($column1, $direction1)
                ->paginate($perPage);

            // Append search term to pagination links
            $repairdetails->appends(['search_devices' => $searchTerm1]);

        return view('repairhistoryview', ['repairdevices'=>$repairdevices,'repairdetails' => $repairdetails,
        'searchTerm1' => $searchTerm1]);
    }

    public function edit($id){
       $repairhistory = DB::table('repair_history')->find($id);
       return view ('repairhistoryedit',compact('repairhistory'));
    }

    public function update(Request $request, $id){

        DB::table('devices')->update([
            'DeviceRemarks' => $request['Remarks'],
            'DeviceStatus' => $request['Status']
        ]);

        DB::table('repair_history')->where('id',$id)->update([
            'id' => $request['id'],
            'issue_date' => $request['issue_date'],
            'repair_date' => now(),
            'Remarks' => $request['Remarks'],
            'Defect' => $request['Defect'],
            'Status' => $request['Status']
        ]);



        return redirect('/repairhistory')->with('update',' ');
    }

}
