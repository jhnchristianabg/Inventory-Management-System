<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ConsModel;
use App\Models\ConsModel1;

class ConsController extends Controller
{
    public function index(){
        return view('cablesandperipherals');
    }

    public function add_cons(Request $request){

        $request->validate([
            'ConsID'=> 'required',
            'ConsType',
            'ConsName'=> 'required',
            'ConsBrand'=> 'required',
            'ConsModel'=> 'required',
            'ConsQuantity'=> 'required',
            'ConsStatus',
            'ConsRemarks',
            'ConsPriceprunit'=> 'required',
            'ConsSupplier'=> 'required',
            'ConsDateOfPurch'=> 'required',
            'ConsWarranty'
        ]);

        $query = DB::table('consumables')->insert([
            'ConsID'=>$request->input('ConsID'),
            'ConsType'=>$request->input('ConsType'),
            'ConsName'=>$request->input('ConsName'),
            'ConsBrand'=>$request->input('ConsBrand'),
            'ConsModel'=>$request->input('ConsModel'),
            'ConsQuantity'=>$request->input('ConsQuantity'),
            'ConsStatus'=>$request->input('ConsStatus'),
            'ConsRemarks'=>$request->input('ConsRemarks')

        ]);

        $query = DB::table('cons_purchase_details')->insert([
            'ConsPriceprunit'=>$request->input('ConsPriceprunit'),
            'ConsSupplier'=>$request->input('ConsSupplier'),
            'ConsDateOfPurch'=>$request->input('ConsDateOfPurch'),
            'ConsWarranty'=>$request->input('ConsWarranty')

        ]);

        if($query){
            return back()->with('success',' ');
        }else{
            return back()->with('failed',' ');
        }
    }

    public function show_cons(Request $request){
        $column = $request->get('column', 'ConsID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 8;

        $data = ConsModel::orderBy($column, $direction)->paginate($perPage);

        return view('consumables', [
            'consview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_cons(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 8;
        $column = $request->get('column', 'ConsID'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $consview = ConsModel::where(function ($query) use ($searchTerm) {
            $query->where('ConsID', 'like', "%$searchTerm%")
                  ->orWhere('ConsType', 'like', "%$searchTerm%")
                  ->orWhere('ConsName', 'like', "%$searchTerm%")
                  ->orWhere('ConsBrand', 'like', "%$searchTerm%")
                  ->orWhere('ConsModel', 'like', "%$searchTerm%")
                  ->orWhere('ConsQuantity', 'like', "%$searchTerm%")
                  ->orWhere('ConsStatus', 'like', "%$searchTerm%")
                  ->orWhere('ConsRemarks', 'like', "%$searchTerm%");
        })->orderBy($column, $direction)->paginate($perPage);

        return view('consumables', compact('consview', 'searchTerm', 'column', 'direction'));
    }

    /* --------------THIS FIELD IS FOR TABLE ACTIONS -------------- */

    public function cons_details($id){
        // Variable = DB::select('select * from "DB TABLE NAME" where "TABLE" = ?', [$"TABLE"]);
        $cons_details= DB::select('select * from consumables where id = ?', [$id]);
        $cons_purchasedetails= DB::select('select * from cons_purchase_details where id = ?', [$id]);
        // return view('Blade', compact('Variable'));
        return view('consdetails', ['cons_details'=>$cons_details,'cons_purchasedetails'=>$cons_purchasedetails]);
    }

    public function cons_edit($id){
        // $Variable = DB::table('table name')->find($id);
       $cons = DB::table('consumables')->find($id);
       $cons_purchasedetails = DB::table('cons_purchase_details')->find($id);
       return view ('consedit',compact('cons','cons_purchasedetails'));
    }

    public function cons_update(Request $request, $id){
        //
        $request->validate([
            'ConsID'=> 'required',
            'ConsType',
            'ConsName'=> 'required',
            'ConsBrand'=> 'required',
            'ConsModel'=> 'required',
            'ConsQuantity'=> 'required',
            'ConsStatus',
            'ConsRemarks',
            'ConsPriceprunit'=> 'required',
            'ConsSupplier'=> 'required',
            'ConsDateOfPurch'=> 'required',
            'ConsWarranty'
        ]);

        $cons = DB::table('consumables')->where('id',$id)->update([
            'ConsID' => $request['ConsID'],
            'ConsType' => $request['ConsType'],
            'ConsName' => $request['ConsName'],
            'ConsBrand' => $request['ConsBrand'],
            'ConsModel' => $request['ConsModel'],
            'ConsQuantity' => $request['ConsQuantity'],
            'ConsStatus' => $request['ConsStatus'],
            'ConsRemarks' => $request['ConsRemarks']
        ]);

        $cons_purchasedetails = DB::table('cons_purchase_details')->where('id',$id)->update([
            'ConsPriceprunit' => $request['ConsPriceprunit'],
            'ConsSupplier' => $request['ConsSupplier'],
            'ConsDateOfPurch' => $request['ConsDateOfPurch'],
            'ConsWarranty' => $request['ConsWarranty']
        ]);


        return redirect('/consumables')->with('update',' ');
    }

    public function cons_softDelete($id)
    {
        $cons = ConsModel::findOrFail($id);
        $cons_purchasedetails = ConsModel1::findOrFail($id);

        $cons->delete();
        $cons_purchasedetails->delete();

        return redirect('/consumables')->with('delete',' ');
    }

    /* --------------TABLE ACTIONS ENDS HERE -------------- */
}
