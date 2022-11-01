<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{

    public function index()
    {
        // return $data = Reading::with('meter_reading')->first();
        //  $readings = Reading::with('meter_reading')->get();
         $meters = Meter::all();
        return view('admin.reading.index',compact('meters'));
    }

    public function create()
    {
        $areas = Area::all();
        $meters = Meter::all();
        return view('admin.reading.create',compact('meters','areas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'unit' => 'required',
            'date' => 'required',
            
        ]);
   $lastreading = Reading::where('meter_id', $request->meter_id)->latest()->orderBy('id','DESC')->value('unit');

        $data = new Reading();
        $data->area_id = $request->area_id;
        $data->meter_id = $request->meter_id;
        $data->unit = $request->unit;
        $data->date = $request->date;
        $data->save();
       
        $meater= Meter::find($request->meter_id);
       $meater->use_unit = $request->unit - $lastreading;
       $meater->update();


        return back()->with('success', 'Added Successfully');
    }

    public function show($id)
    {
        $datas = Meter::with(['meter_reading','meter_owner'])->where('id', $id)->first();
        return view('admin.reading.show',compact('datas'));
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

    public function getAreaMeterSection($id){
        return Meter::where('area_id', $id)->get();
    }
}
