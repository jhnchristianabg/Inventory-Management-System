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
    public function index(Request $request)
    {
        return view('itsemployeeaccountabilitydevice');
    }

    public function search_acc_device(Request $request){
        // OUTSIDE MODAL
        $searchTerm2 = $request->input('search_device');
        $dev_acc_perPage = 10;
        $column_acc_dev = $request->get('column', 'id');
        $direction_acc_dev = $request->get('direction', 'asc');

        $data = DeviceAccModel::all();
        $data_location = DB::table('locations')->get();

        $dev_acc_query = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'updated_at', 'DeviceLocation', 'is_accountability')
            ->whereNotNull('is_accountability')
            ->where(function ($query) use ($searchTerm2) {
                $query->where('DeviceID', 'like', "%$searchTerm2%")
                    ->orWhere('id', 'like', "%$searchTerm2%")
                    ->orWhere('DeviceType', 'like', "%$searchTerm2%")
                    ->orWhere('DeviceBrand', 'like', "%$searchTerm2%")
                    ->orWhere('updated_at', 'like', "%$searchTerm2%")
                    ->orWhere('DeviceLocation', 'like', "%$searchTerm2%")
                    ->orWhere('is_accountability', 'like', "%$searchTerm2%");
            })
            ->orderBy($column_acc_dev, $direction_acc_dev);

        $dev_acc = $dev_acc_query->paginate($dev_acc_perPage, ['*'], 'dev_acc');

        // Append search term to pagination links outside modal
        $dev_acc->appends(['search_device' => $searchTerm2]);

        // INSIDE MODAL
        $searchTerm1 = $request->input('search_devicemodal');
        $deviceview_acc_perPage = 5;
        $column_acc_dev_modal = $request->get('column', 'id');
        $direction_acc_dev_modal = $request->get('direction', 'asc');

        $deviceview_acc_query = DB::table('devices')->select('id', 'DeviceID', 'DeviceType', 'DeviceName', 'DeviceBrand', 'DeviceModel', 'DeviceSerialNo', 'DeviceLocation')
            ->whereNull('is_accountability')
            ->where(function ($query) use ($searchTerm1) {
                $query->where('DeviceID', 'like', "%$searchTerm1%")
                    ->orWhere('id', 'like', "%$searchTerm1%")
                    ->orWhere('DeviceType', 'like', "%$searchTerm1%")
                    ->orWhere('DeviceName', 'like', "%$searchTerm1%")
                    ->orWhere('DeviceBrand', 'like', "%$searchTerm1%")
                    ->orWhere('DeviceModel', 'like', "%$searchTerm1%")
                    ->orWhere('DeviceSerialNo', 'like', "%$searchTerm1%")
                    ->orWhere('DeviceLocation', 'like', "%$searchTerm1%");
            })
            ->orderBy($column_acc_dev_modal, $direction_acc_dev_modal);

        $deviceview_acc = $deviceview_acc_query->paginate($deviceview_acc_perPage, ['*'], 'deviceview_acc');

        // Append search term to pagination links inside modal
        $deviceview_acc->appends(['search_devicemodal' => $searchTerm1]);

        return view('itsemployeeaccountabilitydevice', compact('dev_acc', 'searchTerm2', 'dev_acc_perPage', 'column_acc_dev', 'direction_acc_dev', 'data', 'data_location',
            'searchTerm1', 'deviceview_acc_perPage', 'column_acc_dev_modal', 'direction_acc_dev_modal', 'deviceview_acc'));
    }

    public function update(Request $request){
        $deviceId = $request->input('selected_device');
        $newAcc = $request->input('is_accountability');
        $newDeviceId = $request->input('newDeviceID');
        $newLocation = $request->input('newLocation');

        // Update the selected device
        DB::table('devices')->where('id', $deviceId)->update([
            'DeviceID' => $newDeviceId,
            'DeviceLocation' => $newLocation,
            'is_accountability' => $newAcc,
            'updated_at' => now() // Set the updated_at column to current timestamp
        ]);

        // Set session flash data for update notification
        return redirect('/itsemployeeaccountabilitydevice')->with('update', ' ');
    }
}
