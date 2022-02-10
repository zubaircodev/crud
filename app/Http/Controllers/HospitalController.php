<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Area;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function create()
    {
       $cities = City::all();
       $areas = Area::all();
        return view('hospital.create',compact('cities','areas'));
    }

   public function store()
   {
    $hospital = new Hospital;
    $hospital->name= request()->name;
    $hospital->address= request()->address;
    $hospital->lat= request()->lat;
    $hospital->long= request()->long;
    $hospital->city_id=request()->city_id;
    $hospital->area_id=request()->area_id;
    $hospital->save();
    return redirect('panel/hospitals');
   }

   public function display()
   {
    //    $hospitals = Hospital::all();
         $hospitals = Hospital::with('city','area')->get();
       return view('hospital.display',compact('hospitals'));
   }

   public function delete($id)
   {
       // dd($id);
      Hospital::find($id)->delete();
       return redirect('panel/hospitals');
   }

   public function edit($id)
   {
        $hospitals = Hospital::find($id);
        $cities =  City::all();
        $areas =  Area::all();
      return view('hospital.edithospital',compact('areas','cities','hospitals'));
   }
   public function update(Request $request, Hospital $hospital )
   {
       $hospital->name= request()->name;
       $hospital->address= request()->address;
       $hospital->lat= request()->lat;
       $hospital->long= request()->long;
       $hospital->city_id= request()->city_id;
       $hospital->area_id= request()->area_id;
       $hospital->save();
       return redirect('panel/hospitals');
       
 

   }
   

 
}
