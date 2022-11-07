@extends('admin.layouts.master')

@section('dashboard')
    <div>
        <form action="{{route('generate.bill')}}" method="get">
        <div class="flex justify-center px-3 py-4">
            <input type="date" name="start" class="border-none px-3 py-2 mx-10 bg-sky-500 text-white font-bold rounded-md ">
            <input type="date" name="end" class="border-none px-3 py-2 mx-4 bg-sky-500 text-white font-bold rounded-md ">
        </div>
        <div class="flex justify-center my-2">
            <button type="submit" class="border px-5 py-2  bg-green-500 text-white rounded-md">Search</button>
        </div>
    </form>
    </div>

    <div>
        <div class="p-3 mx-5">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Meter Code</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Using Unit</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Amount</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Vat</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Total Amount</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Invoice</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Created Date</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @php
                        $total_amount = 0;
                        $total_unit = 0;
                    @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$data ->meter_bill->meter_id}}</div>
                            </td>
                            
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$unit = $data->unit}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $data->unit_amount}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left font-medium ">{{$data->vat}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-lg text-center text-green-500">{{$amount = $data->net_total}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-lg text-center text-green-500">
                                    <a href="{{route('invoice',$data->id)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                      </svg></a>
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-lg text-center text-green-500">{{$data->date}}</div>
                            </td>
                        </tr>
                        @php
                            $total_amount += $amount;
                            $total_unit += $unit;
                        @endphp

                    @endforeach 
                </tbody>
            </table>
            <div class="text-center mr-20 my-10">
            <table class="flex justify-center ">
                
                    <tr >
                        <th class="mx-3">Total Usage Unit : {{$total_unit}}</th>
                        <th class="mx-3">W</th>
                    </tr>
                    <tr>
                        <th class="mx-3">Net Total :</th>
                        <th class="mx-3">{{$total_amount}} &#2547;</th>
                    </tr>
            </table>
               
            </div>
        </div>
        </div>
    </div>
@endsection