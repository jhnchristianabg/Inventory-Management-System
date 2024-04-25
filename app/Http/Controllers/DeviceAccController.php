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
    public function index(Request $request){
        return view('itsemployeeaccountabilitydevice');
    }

    public function search_acc_device(Request $request){
        // OUTSIDE MODAL ASSIGNED
            $searchTerm2 = $request->input('search_device');
            $dev_acc_perPage = 10;
            $column_acc_dev = $request->get('column_acc_dev', 'id');
            $direction_acc_dev = $request->get('direction_acc_dev', 'asc');

            $data = DeviceAccModel::all();
            $data_location = DB::table('locations')->get();
            $data_student = DB::table('student')->get();

            $dev_acc_query = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'issue_date', 'DeviceLocation', 'is_accountability', 'deleted_at')
                ->whereNotNull('is_accountability')
                ->where('DeviceID', '!=', 'FEU-Cavite') // Exclude rows with DeviceID equal to "FEU-Cavite"
                ->where(function ($query) use ($searchTerm2) {
                    $query->where('DeviceID', 'like', "%$searchTerm2%")
                        ->orWhere('id', 'like', "%$searchTerm2%")
                        ->orWhere('DeviceType', 'like', "%$searchTerm2%")
                        ->orWhere('DeviceBrand', 'like', "%$searchTerm2%")
                        ->orWhere('issue_date', 'like', "%$searchTerm2%")
                        ->orWhere('DeviceLocation', 'like', "%$searchTerm2%")
                        ->orWhere('is_accountability', 'like', "%$searchTerm2%");
                })
                ->orderBy($column_acc_dev, $direction_acc_dev);

            $dev_acc = $dev_acc_query->paginate($dev_acc_perPage, ['*'], 'dev_acc');

            // Append search term to pagination links outside modal
            $dev_acc->appends(['search_device' => $searchTerm2]);
        // END OF OUTSIDE MODAL ASSIGNED

        // OUTSIDE MODAL DEPLOYED
            $searchTerm2_dep = $request->input('search_dep');
            $dev_acc_perPage_dep = 10;
            $column_acc_dep = $request->get('column_acc_dep', 'id');
            $direction_acc_dep = $request->get('direction_acc_dep', 'asc');

            $dev_acc_query_dep = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceBrand', 'issue_date', 'DeviceLocation', 'is_accountability', 'deleted_at')
                ->whereNotNull('is_accountability')
                ->where('DeviceID', '=', 'FEU-Cavite') // Exclude rows with DeviceID equal to "FEU-Cavite"
                ->where(function ($query) use ($searchTerm2_dep) {
                    $query->where('DeviceID', 'like', "%$searchTerm2_dep%")
                        ->orWhere('id', 'like', "%$searchTerm2_dep%")
                        ->orWhere('DeviceType', 'like', "%$searchTerm2_dep%")
                        ->orWhere('DeviceBrand', 'like', "%$searchTerm2_dep%")
                        ->orWhere('issue_date', 'like', "%$searchTerm2_dep%")
                        ->orWhere('DeviceLocation', 'like', "%$searchTerm2_dep%")
                        ->orWhere('is_accountability', 'like', "%$searchTerm2_dep%");
                })
                ->orderBy($column_acc_dep, $direction_acc_dep);

            $dev_acc_dep = $dev_acc_query_dep->paginate($dev_acc_perPage_dep, ['*'], 'dev_acc_dep');

            // Append search term to pagination links outside modal
            $dev_acc_dep->appends(['search_dep' => $searchTerm2_dep]);
        // END OF OUTSIDE MODAL DEPLOYED

        // MODAL PULLOUT
            $searchTerm2_pull = $request->input('search_pull');
            $dev_acc_perPage_pull = 10;
            $column_acc_pull = $request->get('column_acc_pull', 'id');
            $direction_acc_pull = $request->get('direction_acc_pull', 'asc');

            $dev_acc_query_pull = DeviceModel::select('id', 'DeviceID', 'DeviceType', 'DeviceName', 'DeviceBrand', 'DeviceModel', 'DeviceSerialNo', 'DeviceLocation')
                ->whereNotNull('is_accountability')
                ->where('DeviceID', '=', 'FEU-Cavite') // Exclude rows with DeviceID equal to "FEU-Cavite"
                ->where(function ($query) use ($searchTerm2_pull) {
                    $query->where('DeviceID', 'like', "%$searchTerm2_pull%")
                        ->orWhere('id', 'like', "%$searchTerm2_pull%")
                        ->orWhere('DeviceType', 'like', "%$searchTerm2_pull%")
                        ->orWhere('DeviceName', 'like', "%$searchTerm2_pull%")
                        ->orWhere('DeviceBrand', 'like', "%$searchTerm2_pull%")
                        ->orWhere('DeviceModel', 'like', "%$searchTerm2_pull%")
                        ->orWhere('DeviceSerialNo', 'like', "%$searchTerm2_pull%")
                        ->orWhere('DeviceLocation', 'like', "%$searchTerm2_pull%");
                })
                ->orderBy($column_acc_pull, $direction_acc_pull);

            $dev_acc_pull = $dev_acc_query_pull->paginate($dev_acc_perPage_pull, ['*'], 'dev_acc_pull');

            // Append search term to pagination links outside modal
            $dev_acc_pull->appends(['search_pull' => $searchTerm2_pull]);
        // END OF MODAL PULLOUT

        //  MODAL ASSIGN and DEPLOY
            $searchTerm1 = $request->input('search_devicemodal');
            $deviceview_acc_perPage = 5;
            $column_acc_dev_modal = $request->get('column', 'id');
            $direction_acc_dev_modal = $request->get('direction', 'asc');

            $deviceview_acc_query = DB::table('devices')->select('id', 'DeviceID', 'DeviceType', 'DeviceName', 'DeviceBrand', 'DeviceModel', 'DeviceSerialNo', 'DeviceLocation')
                ->whereNull('is_accountability')
                ->whereNull('deleted_at')
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
        //  MODAL ASSIGNED ENDS HERE

        return view('itsemployeeaccountabilitydevice', compact('dev_acc', 'searchTerm2', 'dev_acc_perPage', 'column_acc_dev', 'direction_acc_dev', 'data', 'data_location', 'data_student',
            'searchTerm1', 'deviceview_acc_perPage', 'column_acc_dev_modal', 'direction_acc_dev_modal', 'deviceview_acc',
            'searchTerm2_dep', 'dev_acc_perPage_dep', 'column_acc_dep', 'direction_acc_dep', 'dev_acc_dep',
            'searchTerm2_pull', 'dev_acc_perPage_pull', 'column_acc_pull', 'direction_acc_pull', 'dev_acc_pull'));
    }

    public function update(Request $request){
        $selectedDevices = $request->input('selected_device');
        $newAcc = $request->input('is_accountability');
        $newDeviceId = $request->input('newDeviceID');
        $newLocation = $request->input('newLocation');

        // Loop through each selected device and update
        foreach ($selectedDevices as $deviceId) {
            // Update each selected device
            DB::table('devices')->where('id', $deviceId)->update([
                'DeviceID' => $newDeviceId,
                'DeviceLocation' => $newLocation,
                'is_accountability' => $newAcc,
                'issue_date' => now() // Set the updated_at column to current timestamp
            ]);
        }

        // Set session flash data for update notification
        return redirect('/itsemployeeaccountabilitydevice')->with('update', ' ');
    }

    public function update_deploy(Request $request){
        $selectedDevices = $request->input('selected_device');

        // Check if $selectedDevices is an array, if not, convert it to an array
        if (!is_array($selectedDevices)) {
            $selectedDevices = [$selectedDevices];
        }

        $newAcc = 'FEU-Cavite';
        $newDeviceId = 'FEU-Cavite';
        $newLocation = $request->input('newLocation_Deploy');

        // Loop through each selected device and update
        foreach ($selectedDevices as $deviceId) {
            // Update each selected device
            DB::table('devices')->where('id', $deviceId)->update([
                'DeviceID' => $newDeviceId,
                'DeviceLocation' => $newLocation,
                'is_accountability' => $newAcc,
                'issue_date' => now() // Set the updated_at column to current timestamp
            ]);
        }

        // Set session flash data for update notification
        return redirect('/itsemployeeaccountabilitydevice')->with('deploy', ' ');
    }

    public function update_pullout(Request $request){
        $selectedDevices = $request->input('selected_device');

        // Check if $selectedDevices is an array, if not, convert it to an array
        if (!is_array($selectedDevices)) {
            $selectedDevices = [$selectedDevices];
        }

        $newAcc = NULL;
        $newDeviceId = NULL;
        $newLocation = $request->input('newLocation_Pullout');

        // Loop through each selected device and update
        foreach ($selectedDevices as $deviceId) {
            // Update each selected device
            DB::table('devices')->where('id', $deviceId)->update([
                'DeviceID' => $newDeviceId,
                'DeviceLocation' => $newLocation,
                'is_accountability' => $newAcc,
                'issue_date' => NULL
            ]);
        }

        // Set session flash data for update notification
        return redirect('/itsemployeeaccountabilitydevice')->with('pullout', ' ');
    }
}
