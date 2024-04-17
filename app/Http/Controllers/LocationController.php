<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LocationModel;

class LocationController extends Controller
{
    public function index(){
        return view('location');
    }

    public function add_loc(Request $request){
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

    public function show_loc(Request $request){
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction
        $perPage = 10;

        $data = LocationModel::orderBy($column, $direction)->paginate($perPage);

        return view('location', [
            'locview' => $data,
            'column' => $column,
            'direction' => $direction
        ]);
    }

    public function search_loc(Request $request){
        $searchTerm = $request->input('search');
        $perPage = 10;
        $column = $request->get('column', 'id'); // Default column to sort
        $direction = $request->get('direction', 'asc'); // Default sorting direction

        $locview = LocationModel::where(function ($query) use ($searchTerm) {
            $query->where('id', 'like', "%$searchTerm%")
                  ->orWhere('Building', 'like', "%$searchTerm%")
                  ->orWhere('Floor', 'like', "%$searchTerm%")
                  ->orWhere('RoomNo', 'like', "%$searchTerm%")
                  ->orWhere('RoomName', 'like', "%$searchTerm%");

        })->orderBy($column, $direction)->paginate($perPage);

        return view('location', compact('locview', 'searchTerm', 'column', 'direction'));
    }

    public function edit_loc($id){
        // $Variable = DB::table('table name')->find($id);
       $location = DB::table('locations')->find($id);
       return view ('locationedit',compact('location'));
    }

    public function update_loc(Request $request, $id){
        //
        $request->validate([
            'Building'=> 'required',
            'Floor'=> 'required',
            'RoomNo',
            'RoomName'=> 'required'
        ]);

        $location = DB::table('locations')->where('id',$id)->update([
            'Building' => $request['Building'],
            'Floor' => $request['Floor'],
            'RoomNo' => $request['RoomNo'],
            'RoomName' => $request['RoomName']
        ]);

        return redirect('/location')->with('update',' ');
    }
}
