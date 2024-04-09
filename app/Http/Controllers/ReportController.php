<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ReportModel;
use App\Models\DeviceModel;

class ReportController extends Controller
{
    public function index(){
        return view('report');
    }

    private function countDevices() {
        //Counting in Report
        $countsys = DB::table('devices')->where('DeviceType', 'System Unit')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countlap = DB::table('devices')->where('DeviceType', 'Laptop')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countaio = DB::table('devices')->where('DeviceType', 'AIO Desktop')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countimac = DB::table('devices')->where('DeviceType', 'IMAC')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countmon = DB::table('devices')->where('DeviceType', 'Monitor')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countspkr = DB::table('devices')->where('DeviceType', 'Speaker')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countproj = DB::table('devices')->where('DeviceType', 'Projector')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countprint = DB::table('devices')->where('DeviceType', 'Printer')
                                        ->whereNull('deleted_at')
                                        ->count();
        $counttv = DB::table('devices')->where('DeviceType', 'TV')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countip = DB::table('devices')->where('DeviceType', 'IP Phone')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countswi = DB::table('devices')->where('DeviceType', 'Switch')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countsvr = DB::table('devices')->where('DeviceType', 'Server')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countrtr = DB::table('devices')->where('DeviceType', 'Router')
                                        ->whereNull('deleted_at')
                                        ->count();
        $counttblt = DB::table('devices')->where('DeviceType', 'Tablet')
                                         ->whereNull('deleted_at')
                                         ->count();

        return [
            // This next field is for Counting in Report
            'countsys' => $countsys,
            'countlap' => $countlap,
            'countaio' => $countaio,
            'countimac' => $countimac,
            'countmon' => $countmon,
            'countspkr' => $countspkr,
            'countproj' => $countproj,
            'countprint' => $countprint,
            'counttv' => $counttv,
            'countip' => $countip,
            'countswi' => $countswi,
            'countsvr' => $countsvr,
            'countrtr' => $countrtr,
            'counttblt' => $counttblt
        ];
    }

    public function show_report(Request $request){
        $counts = $this->countDevices();

        // Check if this is the initial load or a request with sorting parameters
        $column = $request->get('column', 'id');
        $direction = $request->get('direction', 'asc');

        // If no sorting parameters are provided, return an empty dataset
        if (!$request->has('column') && !$request->has('direction')) {
            return view('report', [
                'devicereport' => null, // Return null
                'column' => $column,
                'direction' => $direction,
                'counts' => $counts,
            ]);
        }

        // If sorting parameters are provided, fetch and return data as usual
        $perPage = 10;

        $data = ReportModel::whereNull('deleted_at') // Exclude deleted records
                            ->orderBy($column, $direction)
                            ->paginate($perPage);

        return view('report', [
            'devicereport' => $data,
            'column' => $column,
            'direction' => $direction,
            'counts' => $counts,
        ]);
    }

    public function search_device_report(Request $request){

        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id');
        $direction = $request->get('direction', 'asc');

        // Get counts from countDevices() method
        $counts = $this->countDevices();

        $query = ReportModel::query()->whereNull('deleted_at');

        if (!empty($searchTerm)) {
            $query->where(function ($query) use ($searchTerm) {
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
                      ->orWhere('DeviceRemarks', 'like', "%$searchTerm%");
            });
        } else {
            // If search term is empty, return empty result set
            $devicereport = collect();
        }

        // If search term is not empty, execute the search query
        if (!isset($devicereport)) {
            $devicereport = $query->orderBy($column, $direction)->paginate($perPage);
        }

        // Return the view with the paginator instance and counts
        return view('report', compact('devicereport', 'searchTerm', 'column', 'direction', 'counts'));
    }

}
