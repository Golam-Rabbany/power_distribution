<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index()
    {
        $areas = Area::all();
        return view('admin.area.index',compact('areas'));
    }

    public function create()
    {
        return view('admin.area.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'area_code' => 'required',
            'address' => 'required',
        ]);

        $area_data = new Area();
        $area_data->area_code = $request->area_code;
        $area_data->address = $request->address;
        $area_data->save();
        return back()->with('success', 'Area Data added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $area = Area::find($id);
       $area->delete();
       return back();
    }
}
