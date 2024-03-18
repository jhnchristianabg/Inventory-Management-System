<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    function index(){
        return view('device');
    }

    function add(Request $request){
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
            'DeviceID'=>$request->input('DeviceID'),
            'DeviceOperatingSys'=>$request->input('DeviceOperatingSys'),
            'DeviceProductKey'=>$request->input('DeviceProductKey'),
            'DeviceProcessor'=>$request->input('DeviceProcessor'),
            'DeviceMemory'=>$request->input('DeviceMemory'),
            'DeviceStorage1'=>$request->input('DeviceStorage1'),
            'DeviceStorage2'=>$request->input('DeviceStorage2')

        ]);

        $query = DB::table('device_purchase_details')->insert([
            'DeviceID'=>$request->input('DeviceID'),
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
}
