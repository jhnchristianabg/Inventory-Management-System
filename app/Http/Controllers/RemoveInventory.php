<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DeviceModel;

class RemoveInventory extends Controller
{
    public function show(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $deviceview_remove = DB::table('devices')
            ->whereNotNull('deleted_at')
            ->orderBy($column, $direction)
            ->paginate($perPage);

        return view('removedevice', [
            'deviceview_remove' => $deviceview_remove,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_remove_device(Request $request){
        $search_remove_device = $request->input('search_remove_device');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $deviceview_remove = DB::table('devices')->whereNotNull('deleted_at')
            ->where(function ($query) use ($search_remove_device) {
                $query->where('DeviceID', 'like', "%$search_remove_device%")
                      ->orWhere('id', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceType', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceName', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceBrand', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceModel', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceSerialNo', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceMacAdd', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceLocation', 'like', "%$search_remove_device%")
                      ->orWhere('DeviceStatus', 'like', "%$search_remove_device%")
                      ->orWhere('is_accountability', 'like', "%$search_remove_device%");
            })
            ->orderBy($column, $direction)
            ->paginate($perPage);

        // Append search term to pagination links
        $deviceview_remove->appends(['search_remove_device' => $search_remove_device]);

        return view('removedevice', compact('deviceview_remove', 'search_remove_device', 'column', 'direction'));
    }
}
