<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Http\Request;

class BillController extends Controller
{

    public function index()
    {
        $datas = Bill::with('meter_bill')->get();
        return view('admin.bill.index',compact('datas'));
    }

    public function create(Request $request)
    {
        $datas = Bill::with('bill_meter')->get();
        return view('admin.bill.create',compact('datas'));
    }
    // public function create(Request $request)
    // {
    //      $datas = Meter::with('bill_meter')->first();
    //     return view('admin.bill.create',compact('datas'));
    // }

    public function store(Request $request)
    {
        //
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
        //
    }
    public function generate_bill(Request $request){
        // // $hello = Reading::whereBetween('created_at',[$request->start, $request->end])->get();
        // return $datas = Reading::with('meter_bill')->whereBetween('created_at',[$request->start, $request->end])->get();
        // return $hello = Bill::where('meter_id',)
    //    return $datas = Reading::with('meter_bill')->where('')->whereBetween('created_at',[$request->start, $request->end])->get();

        $datas = Reading::with(['reading_bill', 'meter_bill'])->whereBetween('created_at',[$request->start, $request->end])->get();
       return view('admin.bill.create',compact('datas'));
    }

    // public function generate_bill(Request $request){

    //     $meters = Meter::with('meter_reading')->where('id',$request->meter_id)->first();
    //      // $hello = Reading::whereBetween('created_at',[$request->start, $request->end])->get();
    //      $datas = Reading::with('meter_reading')->whereBetween('created_at',[$request->start, $request->end])->get();
    //      return view('admin.bill.create',compact('datas'));
    //  }

    public function paybill(){
        return view('admin.bill.pay_bill');
    }
    public function invoice(){
        return view('admin.bill.invoice');
    }
}
