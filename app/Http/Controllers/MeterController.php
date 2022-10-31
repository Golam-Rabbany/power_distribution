<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Meter;
use App\Models\Owner;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class MeterController extends Controller
{

    public function index()
    {
         $meters = Meter::all();
         $owners = Owner::with('owner_meter')->get();
         $areas = Area::with('area_meter')->get();
        return view('admin.meter.index',compact('meters','areas','owners'));
    }

    public function create()
    {
        $areas = Area::all();
        $owners = Owner::all();
        return view('admin.meter.create',compact('areas', 'owners'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'mether_type' => 'required',
            'meter_id' => 'required',
            'city' => 'required',
            'area' => 'required',
            'flat' => 'required',
            'flat' => 'required',
            'post_code' => 'required',
        ]);


        $data = new Meter();
        $data->mether_type = $request->mether_type;
        $data->meter_id = $request->meter_id;
        $data->area_id = $request->area_id;
        $data->owner_id = $request->owner_id;
        $data->city = $request->city;
        $data->area = $request->area;
        $data->flat = $request->flat;
        $data->post_code = $request->post_code;
        $data->save();
        return back()->with('success', 'Successfully Done');

    }

    public function show($id)
    {
        // $owners = Meter::->where('id', $id)->get();
         $data = Meter::with(['meter_area','meter_owner'])->where('id', $id)->first();

        return view('admin.meter.owner_show',compact('data'));
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
        //
    }
}
