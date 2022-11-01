<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{

    public function index()
    {
         $owners = Owner::all();
        return view('admin.owner.index',compact('owners'));
    }

    public function create()
    {
        $areas = Area::all();
        return view('admin.owner.create',compact('areas'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'owner_name' => 'required',
            'father_name' => 'required',
            'nid' => 'numeric|digits:10|unique:owners,nid',
            'phone' => 'unique:owners,phone|required|regex:/(01)[0-9]{9}/',
            'city' => 'required',
            'area' => 'required',
            'flat' => 'required',
            'post_code' => 'required',
        ]);

        $owner_data = new Owner();
        $owner_data->owner_name = $request->owner_name;
        $owner_data->father_name = $request->father_name;
        $owner_data->nid = $request->nid;
        $owner_data->phone = $request->phone;
        $owner_data->city = $request->city;
        $owner_data->area = $request->area;
        $owner_data->flat = $request->flat;
        $owner_data->post_code = $request->post_code;
        $owner_data->area_id = $request->area_id;
        $owner_data->save();
        return back()->with('success', 'Owner added Successfully');
    }

    public function show($id)
    {
        return view('admin.owner.show');
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
