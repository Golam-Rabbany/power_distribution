@extends('admin.layouts.master')

@section('dashboard')
<div class="px-10 py-10">
    <div class="flex justify-between ">
      <div>
        <span class="text-3xl font-bold ">Electric Bill </span>
      </div>
      <div class="text-right">
        <p class="text-sm mb-2 "><button class=" print:hidden px-3 py-1 bg-blue-500 text-white rounded" id="print" onclick="printFunction()">Print</button></p>
        <p class="text-xl font-semibold">MM_ELECTRIC SOFT</p>
        <p class="text-xl ">Jhigatola, Dhanmondi</p>
        <p class="text-xl ">Dhaka</p>
        <p class="text-xl ">Date : 06 November 2022</p>
      </div>
    </div>
  
    <div>
      <p class="text-xl font-bold">Bill To,</p>
        <div>
          <p>Name: {{$invoice_data->meter_owner->owner_name}}</p>
          <p>Phone: {{$invoice_data->meter_owner->phone}}</p>
          <p>NID: {{$invoice_data->meter_owner->nid}}</p>
          <p>Main Address: {{$invoice_data->meter_owner->city}},{{$invoice_data->meter_owner->area}}</p> 
          <p>Address: {{$invoice_data->meter_owner->flat}},{{$invoice_data->meter_owner->post_code}}</p> 
        </div>
    </div>
  
    <div>
    <div class="my-8">
      <div class="overflow-x-auto">
          <table class="table-auto w-full">
              <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-200">
                  <tr>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Unit</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Unit Charge</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Vat</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-center">Net Total</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-center">Date</div>
                      </th>
                  </tr>
              </thead>
              <tbody class="text-sm divide-y bg-gray-100 divide-gray-100">
                  <tr>
                      <td class="p-2 whitespace-nowrap">
                          <div class="flex items-center">
                              <div class="font-medium text-gray-800">{{$invoice_data->unit}}</div>
                          </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left">{{$sub_total = $invoice_data->unit_amount}}</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left font-medium text-green-500">{{$vat = $invoice_data->vat}}</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-lg text-center">{{$net_total = $invoice_data->net_total}}</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-lg text-center">{{$invoice_data->date}}</div>
                      </td>
                  </tr>
              </tbody>
          </table>
          <table class="flex justify-end my-5">
            <tbody>
              <tr>
                <td class="px-1 font-semibold text-lg ">Sub Total :</td> 
                <td class="px-1 font-semibold text-lg "> {{$sub_total}}</td>
              </tr>
              <tr>
                <td class="px-1 font-semibold text-lg ">Tax Charge :</td> 
                <td class="px-1 font-semibold text-lg "> {{$vat}}</td>
              </tr>
              <tr>
                <td class="px-1 font-semibold text-lg ">Other Charge :</td> 
                <td class="px-1 font-semibold text-lg "> 0</td>
              </tr>
              <tr>
                <td class="px-1 text-xl font-bold">Total :</td> 
                <td class="px-1 text-xl font-bold"> {{$net_total}}</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  </div>

  <script>
    function printFunction(){
      window.print();
    }
  </script>
@endsection