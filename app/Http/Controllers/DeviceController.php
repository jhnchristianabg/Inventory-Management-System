<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DeviceModel;

class DeviceController extends Controller
{
    public function index(){
        return view('device');
    }

    public function add(Request $request){
        $request->validate([
            'DeviceID'=> 'required',
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
            'DeviceStorage1',
            'DeviceStorage2'

        ]);

        $query = DB::table('devices')->insert([
            'DeviceID'=>$request->input('DeviceID'),
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

    public function show(){
        $data=DeviceModel::all();
        // return view('BLADE NAME',['VARIABLE'=>$data]);
        return view('device',['deviceview'=>$data]);
    }

    public function details($id){
        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $devdetails= DB::select('select * from devices where id = ?', [$id]);
        $specs= DB::select('select * from device_specs where id = ?', [$id]);
        $purchasedetails= DB::select('select * from device_purchase_details where id = ?', [$id]);
        // return view('Blade', compact('Variable'));
        return view('devicedetails', ['devdetails'=>$devdetails,'specs'=>$specs,'purchasedetails'=>$purchasedetails]);
    }

    public function edit($id){
       $devices = DeviceModel::find($id);
       return view ('deviceedit',compact('devices'));
    }

    public function update(Request $request, $id){
        //
        $request->validate([
            'DeviceID'=> 'required',
            'DeviceName'=> 'required',
            'DeviceBrand'=> 'required',
            'DeviceModel'=> 'required',
            'DeviceSerialNo',
            'DeviceMacAdd',
            'DeviceLocation'=> 'required',
            'DeviceStatus',
            'DeviceRemarks',

        ]);

        $devices = DeviceModel::where('id',$id)->update([
            'DeviceID' => $request['DeviceID'],
            'DeviceName' => $request['DeviceName'],
            'DeviceBrand' => $request['DeviceBrand'],
            'DeviceModel' => $request['DeviceModel'],
            'DeviceSerialNo' => $request['DeviceSerialNo'],
            'DeviceMacAdd' => $request['DeviceMacAdd'],
            'DeviceLocation' => $request['DeviceLocation'],
            'DeviceStatus' => $request['DeviceStatus'],
            'DeviceRemarks' => $request['DeviceRemarks']
        ]);

        return redirect('/device')->with('success',' ');
    }
}
