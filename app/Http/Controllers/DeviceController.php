<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CPModel;
use App\Models\ConsModel;
use App\Models\DeviceModel;
use App\Models\DeviceModel1;
use App\Models\DeviceModel2;
use App\Models\DeviceModel3;
use App\Models\Location;

class DeviceController extends Controller
{
    public function index(){
        $data_location = DB::table('locations')->get();
        return view('device',['data_location' =>$data_location]);
    }

    public function count(){
        $totaldevices = DeviceModel::count();
        $totalcp = CPModel::count();
        $totalcons = ConsModel::count();
        $totalaccountability = DB::table('devices')->whereNotNull('is_accountability')
                                                   ->where('DeviceID', '!=', 'FEU-Cavite')->count();
        return view('dashboard', ['totaldevices' => $totaldevices, 'totalcp' => $totalcp, 'totalcons' => $totalcons, 'totalaccountability' => $totalaccountability]);
    }

    public function add(Request $request)
    {
        $dev = array();
        $dev = DB::table('devices')->where('DeviceSerialNo', $request->input('DeviceSerialNo'))->exists();

        // Check if the device serial number already exists
        if ($dev) {
            return redirect('/device')->with('failed', ' ');
        } else {

            // Create the device
            DB::table('devices')->insert([
                'DeviceID' => $request->input('DeviceID'),
                'DeviceType' => $request->input('DeviceType'),
                'DeviceName' => $request->input('DeviceName'),
                'DeviceBrand' => $request->input('DeviceBrand'),
                'DeviceModel' => $request->input('DeviceModel'),
                'DeviceSerialNo' => $request->input('DeviceSerialNo'),
                'DeviceMacAdd' => $request->input('DeviceMacAdd'),
                'DeviceLocation' => $request->input('DeviceLocation'),
                'DeviceStatus' => $request->input('DeviceStatus'),
                'DeviceRemarks' => $request->input('DeviceRemarks')
            ]);

            // Create device specifications
            DB::table('device_specs')->insert([
                'DeviceOperatingSys' => $request->input('DeviceOperatingSys'),
                'DeviceProductKey' => $request->input('DeviceProductKey'),
                'DeviceProcessor' => $request->input('DeviceProcessor'),
                'DeviceMemory' => $request->input('DeviceMemory'),
                'DeviceSize' => $request->input('DeviceSize'),
                'DeviceStorage1' => $request->input('DeviceStorage1'),
                'DeviceStorage2' => $request->input('DeviceStorage2')
            ]);

            // Create device purchase details
            DB::table('device_purchase_details')->insert([
                'DevicePriceprunit' => $request->input('DevicePriceprunit'),
                'DeviceSupplier' => $request->input('DeviceSupplier'),
                'DeviceDateOfPurch' => $request->input('DeviceDateOfPurch'),
                'DeviceWarranty' => $request->input('DeviceWarranty')
            ]);

            return redirect('/device')->with('success', ' ');
        }
    }

    public function show(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;
        $data_location = DB::table('locations')->get();
        $data = DeviceModel::orderBy($column, $direction)->paginate($perPage);

        return view('device', [
            'deviceview' => $data,
            'column' => $column,
            'direction' => $direction,
            'data_location' => $data_location
        ]);
    }

    public function search_device(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $data_location = DB::table('locations')->get();
        $deviceview = DeviceModel::where(function ($query) use ($searchTerm) {
            $query->where('DeviceID', 'like', "%$searchTerm%")
                  ->orWhere('id', 'like', "%$searchTerm%")
                  ->orWhere('DeviceType', 'like', "%$searchTerm%")
                  ->orWhere('DeviceName', 'like', "%$searchTerm%")
                  ->orWhere('DeviceBrand', 'like', "%$searchTerm%")
                  ->orWhere('DeviceModel', 'like', "%$searchTerm%")
                  ->orWhere('DeviceSerialNo', 'like', "%$searchTerm%")
                  ->orWhere('DeviceMacAdd', 'like', "%$searchTerm%")
                  ->orWhere('DeviceLocation', 'like', "%$searchTerm%")
                  ->orWhere('DeviceStatus', 'like', "%$searchTerm%")
                  ->orWhere('is_accountability', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        // Append search term to pagination links
        $deviceview->appends(['search' => $searchTerm]);

        return view('device', compact('deviceview', 'searchTerm', 'column', 'direction','data_location'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    public function details($id){
        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $devdetails= DB::select('select * from devices where id = ?', [$id]);
        $specs= DB::select('select * from device_specs where id = ?', [$id]);
        $purchasedetails= DB::select('select * from device_purchase_details where id = ?', [$id]);
        $data_location = DB::table('locations')->get();
        // return view('Blade', compact('Variable'));
        return view('devicedetails', ['data_location'=>$data_location,'devdetails'=>$devdetails,'specs'=>$specs,'purchasedetails'=>$purchasedetails]);
    }

    public function edit($id){
        // $Variable = DB::table('table name')->find($id);
       $devices = DB::table('devices')->find($id);
       $device_specs = DB::table('device_specs')->find($id);
       $device_purchase_details = DB::table('device_purchase_details')->find($id);
       $data_location = DB::table('locations')->get();
       $currentLocation = DB::table('devices')->where('id', $id)->value('DeviceLocation');
       return view ('deviceedit',compact('data_location', 'currentLocation', 'devices','device_specs','device_purchase_details'));
    }

    public function update(Request $request, $id){

        $dev_edit = array();
        // Check if the device with the given serial number already exists
        $dev_edit = DB::table('devices')->where('DeviceSerialNo', $request->input('DeviceSerialNo'))->first();

        // If the device with the given serial number exists and it's not the device being edited
        if ($dev_edit && $dev_edit->id != $id) {
            return redirect('/device')->with('failed_update', ' ');
        } else {

            $devices = DB::table('devices')->where('id',$id)->update([
                'DeviceID' => $request['DeviceID'],
                'DeviceType' => $request['DeviceType'],
                'DeviceName' => $request['DeviceName'],
                'DeviceBrand' => $request['DeviceBrand'],
                'DeviceModel' => $request['DeviceModel'],
                'DeviceSerialNo' => $request['DeviceSerialNo'],
                'DeviceMacAdd' => $request['DeviceMacAdd'],
                'DeviceLocation' => $request['DeviceLocation'],
                'DeviceStatus' => $request['DeviceStatus'],
                'DeviceRemarks' => $request['DeviceRemarks'],
                'updated_at' => now()
            ]);

            $device_specs = DB::table('device_specs')->where('id',$id)->update([
                'DeviceOperatingSys' => $request['DeviceOperatingSys'],
                'DeviceProductKey' => $request['DeviceProductKey'],
                'DeviceProcessor' => $request['DeviceProcessor'],
                'DeviceMemory' => $request['DeviceMemory'],
                'DeviceSize'=> $request['DeviceSize'],
                'DeviceStorage1' => $request['DeviceStorage1'],
                'DeviceStorage2' => $request['DeviceStorage2']
            ]);

            $device_purchase_details = DB::table('device_purchase_details')->where('id',$id)->update([
                'DevicePriceprunit' => $request['DevicePriceprunit'],
                'DeviceSupplier' => $request['DeviceSupplier'],
                'DeviceDateOfPurch' => $request['DeviceDateOfPurch'],
                'DeviceWarranty' => $request['DeviceWarranty']
            ]);

            return redirect('/device')->with('update',' ');
        }
    }

    public function softDelete($id)
    {
        $device = DeviceModel::findOrFail($id);
        $device_specs = DeviceModel1::findOrFail($id);
        $device_purchase_details = DeviceModel2::findOrFail($id);

        $device->delete();
        $device_specs->delete();
        $device_purchase_details->delete();

        return redirect('/device')->with('delete',' ');
    }

    /* --------------TABLE ACTIONS ENDS HERE -------------- */

    /* --------------ADDING LOCATION -------------- */

    public function addloc(Request $request){
        $request->validate([
            'Building' => 'required',
            'Floor' => 'required',
            'RoomNo' => 'required',
            'RoomName'=> 'required'
        ]);

        $query = DB::table('locations')->insert([
            'Building'=>$request->input('Building'),
            'Floor'=>$request->input('Floor'),
            'RoomNo'=>$request->input('RoomNo'),
            'RoomName'=>$request->input('RoomName')
        ]);

        if($query){
            return back()->with('success',' ');
        }else{
            return back()->with('fail',' ');
        }
    }

    /* --------------ADDING LOCATION ENDS HERE -------------- */

}
