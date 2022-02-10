<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\City;


class AreasController extends Controller
{
    public function create()
    {
       $areas = City::all();
        return view('areas.create',compact('areas'));
    }

    public function store()
    {
        $area = new Area;
        $area->name= request()->name;
        $area->city_id=request()->city_id;
        $area->save();
        return redirect('panel/areas');

        // $attribute = request()->validate([
        //     'name' => 'required|max:20|',
        //     'city_id' => 'required'
        // ]);
        // Area::create($attribute);
        // return redirect()->route('areas.home');
      
    }
    public function display()
    {
    //   $areas = Area::all();
       $areas = Area::with('hospital','city')->get();
        return view('areas.display',compact('areas'));
    }

    public function delete($id)
    {
        // dd($id);
       Area::find($id)->delete();
        return redirect('panel/areas');
    }

    public function edit($id)
    {
         $area = Area::find($id);
         $cities = City::all();
       return view('areas.editarea',compact('area','cities'));
    }

    public function update(Request $request, Area $area )
    {
       
        $area->name= request()->name;
        $area->city_id= request()->city_id;
        $area->save();
        return redirect('panel/areas');
       

    }

}
