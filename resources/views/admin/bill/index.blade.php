@extends('admin.layouts.master')

@section('data_table_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('dashboard')

@can('author')
    
<div>   
    <form action="{{route('bill.index')}}" method="get" >
        <div class="flex justify-center px-3 py-4">
            <input type="date" name="start" class="border-none px-3 py-2 mx-4 bg-sky-500 text-white font-bold rounded-md ">
            <input type="date" name="end" class="border-none px-3 py-2 mx-4 bg-sky-500 text-white font-bold rounded-md ">
        </div>
        <div class="flex justify-center my-2">
            <button type="submit" class="border px-5 py-2  bg-green-500 text-white rounded-md">Search</button>
        </div>
    </form>
</div>

<div class=" py-5">
    <div class="p-3 mx-5">
    <div class="overflow-x-auto">
        <table id="data_table" class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-100">
                <tr>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">ID</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Meter Code</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Usage Unit</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Gross Total</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Vat</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Net Total</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Fine</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Discount</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Paid</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Payable</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Payment System</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Date</div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm bg-gray-50 divide-y divide-gray-100">
            
                @foreach ($datas as $bill)        
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$loop->iteration}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$bill->meter_reading->meter_id}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$bill->unit}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$bill->unit_amount}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">{{$bill->vat}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->net_total}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->fine??"0"}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->discount??"0"}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->paid??"0"}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->payable??"0"}}</div>
                        </td>
                        @if ($bill->net_total != $bill->paid)
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-lg text-center">
                                    <a href="{{route('bill.show',$bill->id)}}"><span class="text-xs px-2 py-1 rounded bg-red-500 text-white">pay now</span></a>
                                </div>
                            </td>
                        @else
                            <td class=" p-2 whitespace-nowrap">
                                <div class=" text-lg text-center">
                                    <span class="text-xs px-2 py-1 rounded text-white  bg-green-500">paid</span>
                                </div>
                            </td>
                        @endif
                        
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->date}}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endcan

@section('data_table_js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#data_table').DataTable();
    });
</script>
@endsection



@endsection