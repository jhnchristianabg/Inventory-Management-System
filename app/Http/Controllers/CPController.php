<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CPModel;
use App\Models\CPModel1;

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
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $data = CPModel::orderBy($column, $direction)->paginate($perPage);

        return view('cablesandperipherals', [
            'cpview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_cp(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $cpview = CPModel::where(function ($query) use ($searchTerm) {
            $query->where('CPID', 'like', "%$searchTerm%")
                  ->orWhere('id', 'like', "%$searchTerm%")
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

    public function cp_edit($id){
        // $Variable = DB::table('table name')->find($id);
       $cps = DB::table('cables_and_peripherals')->find($id);
       $cps_purchasedetails = DB::table('cp_purchase_details')->find($id);
       return view ('cpedit',compact('cps','cps_purchasedetails'));
    }

    public function cp_update(Request $request, $id){
        //
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

        $cps = DB::table('cables_and_peripherals')->where('id',$id)->update([
            'CPID' => $request['CPID'],
            'CPType' => $request['CPType'],
            'CPName' => $request['CPName'],
            'CPBrand' => $request['CPBrand'],
            'CPModel' => $request['CPModel'],
            'CPQuantity' => $request['CPQuantity'],
            'CPStatus' => $request['CPStatus'],
            'CPRemarks' => $request['CPRemarks']
        ]);

        $cps_purchasedetails = DB::table('cp_purchase_details')->where('id',$id)->update([
            'CPPriceprunit' => $request['CPPriceprunit'],
            'CPSupplier' => $request['CPSupplier'],
            'CPDateOfPurch' => $request['CPDateOfPurch'],
            'CPWarranty' => $request['CPWarranty']
        ]);


        return redirect('/cablesandperipherals')->with('update',' ');
    }

    public function cp_softDelete($id)
    {
        $cps = CPModel::findOrFail($id);
        $cps_purchasedetails = CPModel1::findOrFail($id);

        $cps->delete();
        $cps_purchasedetails->delete();

        return redirect('/cablesandperipherals')->with('delete',' ');
    }

    /* --------------TABLE ACTIONS ENDS HERE -------------- */
}
