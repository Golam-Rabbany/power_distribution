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
                            <div class="font-semibold text-left">Meter Id</div>
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
                            <div class="font-semibold text-center">Created Date</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">

                    @foreach ($datas as $data)
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$data->meter_bill->meter_id}}</div>
                            </td>
                            
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$data->unit}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$data->reading_bill->gross_total}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left font-medium ">{{$data->reading_bill->vat}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-lg text-center text-green-500">{{$data->reading_bill->net_total}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-lg text-center text-green-500"></div>
                            </td>
                        </tr>

                    @endforeach 
                </tbody>
            </table>
            <div class="text-center mr-20 my-10">
            <table class="flex justify-center ">
                
                    <tr >
                        <th class="mx-3">Total Usage Unit : </th>
                        <th class="mx-3">W</th>
                    </tr>
                    <tr>
                        <th class="mx-3">Net Total :</th>
                        <th class="mx-3"> &#2547;</th>
                    </tr>
            </table>
               
            </div>
        </div>
        </div>
    </div>
@endsection