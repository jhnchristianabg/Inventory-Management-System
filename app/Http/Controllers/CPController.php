<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CPModel;

class CPController extends Controller
{
    public function index(){
        return view('cablesandperipherals');
    }

    public function add_cp(Request $request){

        $request->validate([
            'CPID'=> 'required',
            'CPType',
            'CPName'=> 'required',
            'CPBrand'=> 'required',
            'CPModel'=> 'required',
            'CPQuantity'=> 'required',
            'CPStatus',
            'CPRemarks',
            'CPPriceprunit'=> 'required',
            'CPSupplier'=> 'required',
            'CPDateOfPurch'=> 'required',
            'CPWarranty'
        ]);

        $query = DB::table('cables_and_peripherals')->insert([
            'CPID'=>$request->input('CPID'),
            'CPType'=>$request->input('CPType'),
            'CPName'=>$request->input('CPName'),
            'CPBrand'=>$request->input('CPBrand'),
            'CPModel'=>$request->input('CPModel'),
            'CPQuantity'=>$request->input('CPQuantity'),
            'CPStatus'=>$request->input('CPStatus'),
            'CPRemarks'=>$request->input('CPRemarks')

        ]);

        $query = DB::table('cp_purchase_details')->insert([
            'CPPriceprunit'=>$request->input('CPPriceprunit'),
            'CPSupplier'=>$request->input('CPSupplier'),
            'CPDateOfPurch'=>$request->input('CPDateOfPurch'),
            'CPWarranty'=>$request->input('CPWarranty')

        ]);

        if($query){
            return back()->with('success',' ');
        }else{
            return back()->with('failed',' ');
        }
    }

    public function show_cp(Request $request){
        $column = $request->get('column', 'CPID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 8;

        $data = CPModel::orderBy($column, $direction)->paginate($perPage);

        return view('cablesandperipherals', [
            'cpview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_cp(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 8;
        $column = $request->get('column', 'CPID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $cpview = CPModel::where(function ($query) use ($searchTerm) {
            $query->where('CPID', 'like', "%$searchTerm%")
                  ->orWhere('CPType', 'like', "%$searchTerm%")
                  ->orWhere('CPName', 'like', "%$searchTerm%")
                  ->orWhere('CPBrand', 'like', "%$searchTerm%")
                  ->orWhere('CPModel', 'like', "%$searchTerm%")
                  ->orWhere('CPQuantity', 'like', "%$searchTerm%")
                  ->orWhere('CPStatus', 'like', "%$searchTerm%")
                  ->orWhere('CPRemarks', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        return view('cablesandperipherals', compact('cpview', 'searchTerm', 'column', 'direction'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    public function cp_details($id){
        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $cps_details= DB::select('select * from cables_and_peripherals where id = ?', [$id]);
        $cps_purchasedetails= DB::select('select * from cp_purchase_details where id = ?', [$id]);
        // return view('Blade', compact('Variable'));
        return view('cpdetails', ['cps_details'=>$cps_details,'cps_purchasedetails'=>$cps_purchasedetails]);
    }
}
