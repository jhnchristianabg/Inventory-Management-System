<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EmployeeModel;
use App\Models\DeviceAccModel;
use App\Models\DeviceAccModel1;
use App\Models\DeviceModel;

class DeviceAccController extends Controller
{
    public function index() {
        // Fetching device data
        $deviceview_acc = DeviceModel::select('DeviceID', 'DeviceType', 'DeviceName', 'DeviceBrand', 'DeviceModel', 'DeviceSerialNo', 'DeviceLocation')
        ->paginate(5);

        // Fetching additional data (if needed)
        $data = DeviceAccModel::all();

        // Fetching location data (assuming locations table exists)
        $data_location = DB::table('locations')->get();

        return view('itsemployeeaccountabilitydevice', [
            'deviceview_acc' => $deviceview_acc,
            'data' => $data,
            'data_location' => $data_location
        ]);
    }
    // This Field is for showing DATABASE TABLE FOR MODAL
    public function show_acc_device(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $deviceview_acc = DeviceModel::orderBy($column, $direction)->paginate($perPage);

        return view('itsemployeeaccountabilitydevice', [
            'deviceview_acc' => $deviceview_acc,
            'column' => $column,
            'direction' => $direction,
        ]);
    }

    public function update(Request $request){
        $deviceId = $request->input('selected_device');
        $newDeviceId = $request->input('newDeviceID');

        // Update the selected device
        DB::table('devices')->where('id', $deviceId)->update(['DeviceID' => $newDeviceId]);

        return redirect('/itsemployeeaccountabilitydevice')->with('update',' ');
    }
}
