@extends('admin.layouts.master')

@section('dashboard')
<div class="flex flex-col justify-center">
    <!-- Table -->
    <div class="w-full mt-8 max-w-4xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">Bill Payment</h2>
        </header>
        <div class="p-3 w-full">
            <form method="POST" action="{{route('bill.update',$detail->id)}}">
              @csrf
              @method('PUT')
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Meter Code
                        </label>
                        <input value="{{$detail->meter_reading->meter_id}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                      </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Meter User
                    </label>
                    <input value="{{$detail->meter_owner->owner_name}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" >
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          User Phone
                        </label>
                        <input value="0{{$detail->meter_owner->phone}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                      </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Use Unit
                    </label>
                    <input value="{{$detail->unit}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" >
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Net Total
                    </label>
                    <input value="{{$net_total =$detail->net_total}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" >
                  </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Payable
                    </label>
                    <input value="{{$detail->payable}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" >
                  </div>
                </div>
                <div class="flex justify-center">
                <div class="w-full text-center md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-2xl font-bold mb-2" for="grid-last-name">
                      Bill Payment
                    </label>
                    <input name="payment" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" >
                  </div>
                </div>
                <div class="text-center w-full my-3 py-4">
                    <div class="">
                        <button class="px-4 py-2 border bg-blue-800 rounded text-white hover:bg-blue-600">Bill Payment</button>
                    </div>
                </div>
                
                
              </form>
        </div>
    </div>
</div>
@endsection