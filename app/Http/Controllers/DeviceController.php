<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CPModel;
use App\Models\DeviceModel;
use App\Models\DeviceModel1;
use App\Models\DeviceModel2;
use App\Models\DeviceModel3;

class DeviceController extends Controller
{
    public function index(){
        return view('device');
    }

    public function count(){
        $totaldevices = DeviceModel::count();
        $totalcp = CPModel::count();
        return view('dashboard', ['totaldevices' => $totaldevices, 'totalcp' => $totalcp]);
    }

    public function add(Request $request){

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

        $query = DB::table('devices')->insert([
            'DeviceID'=>$request->input('DeviceID'),
            'DeviceType'=>$request->input('DeviceType'),
            'DeviceName'=>$request->input('DeviceName'),
            'DeviceBrand'=>$request->input('DeviceBrand'),
            'DeviceModel'=>$request->input('DeviceModel'),
            'DeviceSerialNo'=>$request->input('DeviceSerialNo'),
            'DeviceMacAdd'=>$request->input('DeviceMacAdd'),
            'DeviceLocation'=>$request->input('DeviceLocation'),
            'DeviceStatus'=>$request->input('DeviceStatus'),
            'DeviceRemarks'=>$request->input('DeviceRemarks')

        ]);

        $query = DB::table('device_specs')->insert([
            'DeviceOperatingSys'=>$request->input('DeviceOperatingSys'),
            'DeviceProductKey'=>$request->input('DeviceProductKey'),
            'DeviceProcessor'=>$request->input('DeviceProcessor'),
            'DeviceMemory'=>$request->input('DeviceMemory'),
            'DeviceSize'=>$request->input('DeviceSize'),
            'DeviceStorage1'=>$request->input('DeviceStorage1'),
            'DeviceStorage2'=>$request->input('DeviceStorage2')

        ]);

        $query = DB::table('device_purchase_details')->insert([
            'DevicePriceprunit'=>$request->input('DevicePriceprunit'),
            'DeviceSupplier'=>$request->input('DeviceSupplier'),
            'DeviceDateOfPurch'=>$request->input('DeviceDateOfPurch'),
            'DeviceWarranty'=>$request->input('DeviceWarranty')

        ]);

        if($query){
            return back()->with('success',' ');
        }else{
            return back()->with('failed',' ');
        }
    }

    public function show(Request $request){
        $column = $request->get('column', 'DeviceID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 8;

        $data = DeviceModel::orderBy($column, $direction)->paginate($perPage);

        return view('device', [
            'deviceview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_device(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 8;
        $column = $request->get('column', 'DeviceID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $deviceview = DeviceModel::where(function ($query) use ($searchTerm) {
            $query->where('DeviceID', 'like', "%$searchTerm%")
                  ->orWhere('DeviceType', 'like', "%$searchTerm%")
                  ->orWhere('DeviceName', 'like', "%$searchTerm%")
                  ->orWhere('DeviceBrand', 'like', "%$searchTerm%")
                  ->orWhere('DeviceModel', 'like', "%$searchTerm%")
                  ->orWhere('DeviceSerialNo', 'like', "%$searchTerm%")
                  ->orWhere('DeviceMacAdd', 'like', "%$searchTerm%")
                  ->orWhere('DeviceLocation', 'like', "%$searchTerm%")
                  ->orWhere('DeviceStatus', 'like', "%$searchTerm%")
                  ->orWhere('DeviceRemarks', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        return view('device', compact('deviceview', 'searchTerm', 'column', 'direction'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    public function details($id){
        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $devdetails= DB::select('select * from devices where id = ?', [$id]);
        $specs= DB::select('select * from device_specs where id = ?', [$id]);
        $purchasedetails= DB::select('select * from device_purchase_details where id = ?', [$id]);
        // return view('Blade', compact('Variable'));
        return view('devicedetails', ['devdetails'=>$devdetails,'specs'=>$specs,'purchasedetails'=>$purchasedetails]);
    }

    public function edit($id){
        // $Variable = DB::table('table name')->find($id);
       $devices = DB::table('devices')->find($id);
       $device_specs = DB::table('device_specs')->find($id);
       $device_purchase_details = DB::table('device_purchase_details')->find($id);
       return view ('deviceedit',compact('devices','device_specs','device_purchase_details'));
    }

    public function update(Request $request, $id){
        //
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
            'DeviceRemarks' => $request['DeviceRemarks']
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
