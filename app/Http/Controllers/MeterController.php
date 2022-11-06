<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Area;
use App\Models\Bill;
use App\Models\Meter;
use App\Models\Owner;
use App\Models\Reading;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
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
            'meter_id' => 'required|unique:meters,meter_id,',
            'city' => 'required',
            'area' => 'required',
            'flat' => 'required',
            'flat' => 'required',
            'post_code' => 'required',
        ]);

        try{
              DB::beginTransaction();

              $data = new Meter();
              $bills = new Bill();
              $data->mether_type = $request->mether_type;
              $data->meter_id = $request->meter_id;
              $data->area_id = $request->area_id;
              $data->owner_id = $request->owner_id;
              $data->city = $request->city;
              $data->area = $request->area;
              $data->flat = $request->flat;
              $data->post_code = $request->post_code;
              $data->save();
    
              
              $bills->meter_id =$data->id;
              $bills->save();
           
              DB::commit();
              return back()->with('success', 'Successfully Done');

        }catch(Exception $ex){
                 DB::rollback();
                return $ex;
        }

    }

    public function show($id)
    {
        // $owners = Meter::->where('id', $id)->get();
         $data = Meter::with(['meter_area','meter_owner'])->where('id', $id)->first();
         $readings = Reading::where('meter_id', $id)->get();
        return view('admin.meter.owner_show',compact('data','readings'));
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

    public function getAreaOwnerSection($id){
        return Owner::where('area_id', $id)->get();
    }
}
