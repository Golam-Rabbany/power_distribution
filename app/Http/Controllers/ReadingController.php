<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Bill;
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

        $last_reading = Reading::where('meter_id', $request->meter_id)->latest()->orderBy('id','DESC')->value('unit');

        $data = new Reading();
        $data->area_id = $request->area_id;
        $data->meter_id = $request->meter_id;
        $data->bill_id = $request->meter_id;
        $data->unit = $request->unit - $last_reading;
        $data->date = $request->date;
        if($request->unit > 0 && $request->unit <=300){
            $unit_amount = ($request->unit - $last_reading) * 5.70;
        }elseif ($request->unit >=301 && $request->unit <= 700){
            $unit_amount = ($request->unit - $last_reading) * 8.35;
        }elseif ($request->unit >=701 && $request->unit <= 20000){
            $unit_amount = ($request->unit - $last_reading) * 15.10;
        }
        else{
            $unit_amount = ($request->unit - $last_reading) * 0;
        }
        $data->unit_amount = $unit_amount;
           
        
       
       $meter= Meter::find($request->meter_id);

       if ($meter->mether_type == 'personal'){
        $vat = $unit_amount * 1.22 / 100;
        }elseif ($meter->mether_type == 'business'){
            $vat = $unit_amount * 3.40 / 100;
        }elseif ($meter->mether_type == 'industrial'){
            $vat = $unit_amount * 5.10 /100;
        }else{
            $vat = $unit_amount * 0;
        }
        $data->vat = $vat;
        $data->net_total = $unit_amount + $vat;
        $data->payable = $data->net_total;



       $meter->use_unit = $request->unit - $last_reading;
       $meter->update();

       if ($meter->use_unit > 0 && $meter->use_unit <= 300 ){
            $unit_price = $meter->use_unit * 5.70;
       }elseif ($meter->use_unit >=301 && $meter->use_unit <= 700){
            $unit_price =$meter->use_unit * 8.35;
        }elseif ($meter->use_unit >=701 && $meter->use_unit <= 20000){
            $unit_price =$meter->use_unit * 15.10;
        }
        else{
            $unit_price =$meter->use_unit * 0;
        }

        
        if ($meter->mether_type == 'personal'){
            $vat = $unit_price * 1.22 / 100;
        }elseif ($meter->mether_type == 'business'){
            $vat = $unit_price * 3.40 / 100;
        }elseif ($meter->mether_type == 'industrial'){
            $vat = $unit_price * 5.10 /100;
        }else{
            $vat = $unit_price * 0;
        }


        $bills =Bill::find($request->meter_id);
    
        $bills->usage_unit = $request->unit - $last_reading;
        $bills->gross_total = $unit_price;
        $bills->vat = $vat;
        $bills->net_total = $unit_price + $vat;


        $data->save();
        $bills->save();

        return back()->with('success', 'Added Successfully');
    }

    public function show($id)
    {
         $datas = Reading::with('meter_reading')->where('meter_id', $id)->get();
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
