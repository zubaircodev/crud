<?php

namespace App\Http\Controllers;
use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create()
    {
        return view('cities.create');
    }
    
    public function display()
    {
    //   $cities = City::all();
         $cities = City::with('hospital','area')->get();
        return view('cities.display',compact('cities'));
    }
    
    public function store()
    {
        $attribute = request()->validate([
            'name' => 'required|max:20|'
        ]);
        City::create($attribute);
        return redirect('/panel/cities');
      
    }
  
    public function delete($id)
    {
        City::find($id)->delete();
        return redirect('/panel/cities');
    }

    public function edit($id)
    {
       $city = City::find($id);
       return view('cities.editcity',compact('city'));
    }

    public function update(Request $request, City $city )
    {

        $city->name= request()->name;
        $city->save();
        return redirect('/panel/cities');
     
    }
}
