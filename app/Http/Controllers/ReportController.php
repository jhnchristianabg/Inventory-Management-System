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
        //Counting ALL in Report
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
            $countswi = DB::table('devices')->where('DeviceType', 'Network Switch')
                                            ->whereNull('deleted_at')
                                            ->count();
            $countsvr = DB::table('devices')->where('DeviceType', 'Server')
                                            ->whereNull('deleted_at')
                                            ->count();
            $countrtr = DB::table('devices')->where('DeviceType', 'Wireless Router')
                                            ->whereNull('deleted_at')
                                            ->count();
            $counttblt = DB::table('devices')->where('DeviceType', 'Tablet')
                                            ->whereNull('deleted_at')
                                            ->count();
        // END OF ALL COUNTING

        //Counting ACCOUNTABLE in Report
            $countsys_acc = DB::table('devices')->where('DeviceType', 'System Unit')
                    ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countlap_acc = DB::table('devices')->where('DeviceType', 'Laptop')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countaio_acc = DB::table('devices')->where('DeviceType', 'AIO Desktop')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countimac_acc = DB::table('devices')->where('DeviceType', 'IMAC')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countmon_acc = DB::table('devices')->where('DeviceType', 'Monitor')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countspkr_acc = DB::table('devices')->where('DeviceType', 'Speaker')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countproj_acc = DB::table('devices')->where('DeviceType', 'Projector')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countprint_acc = DB::table('devices')->where('DeviceType', 'Printer')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $counttv_acc = DB::table('devices')->where('DeviceType', 'TV')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countip_acc = DB::table('devices')->where('DeviceType', 'IP Phone')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countswi_acc = DB::table('devices')->where('DeviceType', 'Network Switch')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countsvr_acc = DB::table('devices')->where('DeviceType', 'Server')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $countrtr_acc = DB::table('devices')->where('DeviceType', 'Wireless Router')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
            $counttblt_acc = DB::table('devices')->where('DeviceType', 'Tablet')
            ->whereNotNull('is_accountability')
                    ->whereNull('deleted_at')
                    ->count();
        // END OF ACCOUNTABLE

        //Counting NO ACCOUNTABLE in Report
        $countsys_no_acc = DB::table('devices')->where('DeviceType', 'System Unit')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countlap_no_acc = DB::table('devices')->where('DeviceType', 'Laptop')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countaio_no_acc = DB::table('devices')->where('DeviceType', 'AIO Desktop')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countimac_no_acc = DB::table('devices')->where('DeviceType', 'IMAC')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countmon_no_acc = DB::table('devices')->where('DeviceType', 'Monitor')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countspkr_no_acc = DB::table('devices')->where('DeviceType', 'Speaker')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countproj_no_acc = DB::table('devices')->where('DeviceType', 'Projector')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countprint_no_acc = DB::table('devices')->where('DeviceType', 'Printer')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $counttv_no_acc = DB::table('devices')->where('DeviceType', 'TV')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countip_no_acc = DB::table('devices')->where('DeviceType', 'IP Phone')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countswi_no_acc = DB::table('devices')->where('DeviceType', 'Network Switch')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countsvr_no_acc = DB::table('devices')->where('DeviceType', 'Server')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $countrtr_no_acc = DB::table('devices')->where('DeviceType', 'Wireless Router')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        $counttblt_no_acc = DB::table('devices')->where('DeviceType', 'Tablet')
        ->whereNull('is_accountability')
                ->whereNull('deleted_at')
                ->count();
        // END OF ACCOUNTABLE

        return [
            // This next field is for Counting in ALL Report
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
                'counttblt' => $counttblt,
            // FOR ALL

            // This next field is for Counting in ACCOUNTABLE Report
                'countsys_acc' => $countsys_acc,
                'countlap_acc' => $countlap_acc,
                'countaio_acc' => $countaio_acc,
                'countimac_acc' => $countimac_acc,
                'countmon_acc' => $countmon_acc,
                'countspkr_acc' => $countspkr_acc,
                'countproj_acc' => $countproj_acc,
                'countprint_acc' => $countprint_acc,
                'counttv_acc' => $counttv_acc,
                'countip_acc' => $countip_acc,
                'countswi_acc' => $countswi_acc,
                'countsvr_acc' => $countsvr_acc,
                'countrtr_acc' => $countrtr_acc,
                'counttblt_acc' => $counttblt_acc,
            // END OF ACCOUNTABLE

            // This next field is for Counting in ACCOUNTABLE Report
            'countsys_no_acc' => $countsys_no_acc,
            'countlap_no_acc' => $countlap_no_acc,
            'countaio_no_acc' => $countaio_no_acc,
            'countimac_no_acc' => $countimac_no_acc,
            'countmon_no_acc' => $countmon_no_acc,
            'countspkr_no_acc' => $countspkr_no_acc,
            'countproj_no_acc' => $countproj_no_acc,
            'countprint_no_acc' => $countprint_no_acc,
            'counttv_no_acc' => $counttv_no_acc,
            'countip_no_acc' => $countip_no_acc,
            'countswi_no_acc' => $countswi_no_acc,
            'countsvr_no_acc' => $countsvr_no_acc,
            'countrtr_no_acc' => $countrtr_no_acc,
            'counttblt_no_acc' => $counttblt_no_acc
        // END OF ACCOUNTABLE
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
        $perPage = 1000;

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

        $searchTerm = strtolower($request->input('search')); // Convert search term to lowercase
        $perPage = 1000;
        $column = $request->get('column', 'id');
        $direction = $request->get('direction', 'asc');

        // Get counts from countDevices() method
        $counts = $this->countDevices();

        $query = ReportModel::query()->whereNull('deleted_at');

        // If search term is empty, return empty result
        if (empty($searchTerm)) {
            $devicereport = collect(); // Empty collection
        } else {
            if ($searchTerm === 'accountability') {
                // Search for accountability and not null
                $query->whereNotNull('is_accountability');
            } elseif ($searchTerm === 'no accountability') {
                // Search for not accountability and is null
                $query->whereNull('is_accountability');
            } elseif ($searchTerm !== 'all') {
                // Normal search terms
                $query->where(function ($query) use ($searchTerm) {
                    $query->where('DeviceID', 'like', "%$searchTerm%")
                          ->orWhere('id', 'like', "%$searchTerm%")
                          ->orWhere('DeviceType', 'like', "%$searchTerm%")
                          ->orWhere('is_accountability', 'like', "%$searchTerm%")
                          ->orWhere('DeviceBrand', 'like', "%$searchTerm%")
                          ->orWhere('DeviceModel', 'like', "%$searchTerm%")
                          ->orWhere('DeviceSerialNo', 'like', "%$searchTerm%")
                          ->orWhere('DeviceMacAdd', 'like', "%$searchTerm%")
                          ->orWhere('DeviceLocation', 'like', "%$searchTerm%")
                          ->orWhere('DeviceStatus', 'like', "%$searchTerm%");
                });
            }

            // Execute the search query
            $devicereport = $query->orderBy($column, $direction)->paginate($perPage);
        }

        // Return the view with the paginator instance and counts
        return view('report', compact('devicereport', 'searchTerm', 'column', 'direction', 'counts'));
    }

}
