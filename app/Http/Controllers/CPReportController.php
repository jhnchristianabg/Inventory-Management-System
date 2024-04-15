<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CPReportModel;

class CPReportController extends Controller
{
    public function index(){
        return view('cpreport');
    }

    private function countCP() {
        //Counting in Report
        $countcable = DB::table('cables_and_peripherals')->where('CPType', 'Cable')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countadapter = DB::table('cables_and_peripherals')->where('CPType', 'Adapter')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countconverter = DB::table('cables_and_peripherals')->where('CPType', 'Converte')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countcharger = DB::table('cables_and_peripherals')->where('CPType', 'Charger')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countkeyboard = DB::table('cables_and_peripherals')->where('CPType', 'Keyboard')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countmouse = DB::table('cables_and_peripherals')->where('CPType', 'Mouse')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countavr = DB::table('cables_and_peripherals')->where('CPType', 'AVR')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countwebcam = DB::table('cables_and_peripherals')->where('CPType', 'Webcam')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countscanner = DB::table('cables_and_peripherals')->where('CPType', 'Barcode Scanner')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countmic = DB::table('cables_and_peripherals')->where('CPType', 'Microphone')
                                        ->whereNull('deleted_at')
                                        ->count();
        $countheadset = DB::table('cables_and_peripherals')->where('CPType', 'Headset')
                                        ->whereNull('deleted_at')
                                        ->count();
        $counttripod = DB::table('cables_and_peripherals')->where('CPType', 'Tripod')
                                        ->whereNull('deleted_at')
                                        ->count();

        return [
            // This next field is for Counting in Report
            'countcable' => $countcable,
            'countadapter' => $countadapter,
            'countconverter' => $countconverter,
            'countcharger' => $countcharger,
            'countkeyboard' => $countkeyboard,
            'countmouse' => $countmouse,
            'countavr' => $countavr,
            'countwebcam' => $countwebcam,
            'countscanner' => $countscanner,
            'countmic' => $countmic,
            'countheadset' => $countheadset,
            'counttripod' => $counttripod
        ];
    }

    public function show_cpreport(Request $request){
        $counts = $this->countCP();

        // Check if this is the initial load or a request with sorting parameters
        $column = $request->get('column', 'id');
        $direction = $request->get('direction', 'asc');

        // If no sorting parameters are provided, return an empty dataset
        if (!$request->has('column') && !$request->has('direction')) {
            return view('cpreport', [
                'cpreport' => null, // Return null
                'column' => $column,
                'direction' => $direction,
                'counts' => $counts,
            ]);
        }

        // If sorting parameters are provided, fetch and return data as usual
        $perPage = 10;

        $data = CPReportModel::whereNull('deleted_at') // Exclude deleted records
                            ->orderBy($column, $direction)
                            ->paginate($perPage);

        return view('cpreport', [
            'cpreport' => $data,
            'column' => $column,
            'direction' => $direction,
            'counts' => $counts,
        ]);
    }

    public function search_cp_report(Request $request){

        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id');
        $direction = $request->get('direction', 'asc');

        // Get counts from countDevices() method
        $counts = $this->countCP();

        $query = CPReportModel::query()->whereNull('deleted_at');

        if (!empty($searchTerm)) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('CPID', 'like', "%$searchTerm%")
                      ->orWhere('id', 'like', "%$searchTerm%")
                      ->orWhere('CPType', 'like', "%$searchTerm%")
                      ->orWhere('CPName', 'like', "%$searchTerm%")
                      ->orWhere('CPBrand', 'like', "%$searchTerm%")
                      ->orWhere('CPModel', 'like', "%$searchTerm%")
                      ->orWhere('CPQuantity', 'like', "%$searchTerm%")
                      ->orWhere('CPStatus', 'like', "%$searchTerm%")
                      ->orWhere('CPRemarks', 'like', "%$searchTerm%");
            });
        } else {
            // If search term is empty, return empty result set
            $cpreport = collect();
        }

        // If search term is not empty, execute the search query
        if (!isset($cpreport)) {
            $cpreport = $query->orderBy($column, $direction)->paginate($perPage);
        }

        // Return the view with the paginator instance and counts
        return view('cpreport', compact('cpreport', 'searchTerm', 'column', 'direction', 'counts'));
    }
}
