@extends('admin.layouts.master')

@section('data_table_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('dashboard')
<div class=" py-5">
    <div class="p-3 mx-5">
    <div class="overflow-x-auto">
        <table id="data_table" class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-100">
                <tr>
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
                        <div class="font-semibold text-center">Payable</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Paid</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Payment System</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Created Date</div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm bg-gray-50 divide-y divide-gray-100">
            
                @foreach ($datas as $bill)
                
                
                
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$bill->meter_bill->meter_id}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$bill->usage_unit}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{$bill->gross_total}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500">{{$bill->vat}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->net_total}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->fine}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->discount}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->payable}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->paid}}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">
                                <a href=""><span class="text-xs px-2 py-1 rounded bg-yellow-500 text-white">pay now</span></a>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-lg text-center">{{$bill->created_at}}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>


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