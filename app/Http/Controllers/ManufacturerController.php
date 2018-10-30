<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function addManufacturer(){
        return view('admin.manufacturer.createManufacturer');
    }
    public function saveManufacturer(Request $request){
        $this->validate($request,[
           'manufacturer_name' =>'required',
           'manufacturer_description' =>'required',
           'manufacturer_status' =>'required'
        ]);

        $manufacturer=new Manufacturer();
        $manufacturer->manufacturer_name=$request->manufacturer_name;
        $manufacturer->manufacturer_description=$request->manufacturer_description;
        $manufacturer->manufacturer_status=$request->manufacturer_status;
        $manufacturer->save();
        return redirect()->back()->with('message','Manufacturer has been created');
    }
    public function manageManufacturer(){
        $manufacturers=Manufacturer::all();
        return view('admin.manufacturer.manageManufacturer',compact('manufacturers'));
    }
    public function editManufacturer($id){
        $manufacturerByID= Manufacturer::where('id',$id)->first();
        return view('admin.manufacturer.editManufacturer',compact('manufacturerByID'));
    }
    public function updateManufacturer(Request $request){
        $manufacturer=Manufacturer::find($request->manufacturer_id);

        $manufacturer->manufacturer_name=$request->manufacturer_name;
        $manufacturer->manufacturer_description=$request->manufacturer_description;
        $manufacturer->manufacturer_status=$request->manufacturer_status;
        $manufacturer->save();
        return redirect(route('manageManufacturer'))->with('message','Manufacturer has been updated');
    }
    public function deleteManufacturer($id){
        $manufacturer= Manufacturer::find($id);
        $manufacturer->delete();
        return redirect('/manufacturer/manage')->with('message','Manufacturer Deleted successfully');
    }
}
