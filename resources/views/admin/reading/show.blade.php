@extends('admin.layouts.master')


@section('dashboard')

<section class="antialiased bg-gray-100 text-gray-600 h-screen">
    <div>
        <div class="py-3 px-3 flex justify-end font-bold">
            <div class="text-right">
              <p class="text-2xl">MMITSOFT</p>
              <p>Jhigatola, Dhanmondi, Dhaka</p>
              <p>10-10-22</p>
            </div>
        </div>
          
          <div class="my-2 inline-block">
            {{-- <table class="font-semibold">
              <tbody class="">
                <tr>
                  <td class="px-3">Name:</td>
                  <td class="px-3">{{$datas->meter_owner->owner_name}}</td> 
                </tr>
                <tr>
                  <td class="px-3">Father Name:</td>
                  <td class="px-3">{{$datas->meter_owner->father_name}}</td>
                </tr>
                <tr>
                  <td class="px-3">Phone:</td>
                  <td class="px-3">{{$datas->meter_owner->phone}}</td>
                </tr>
                <tr>
                  <td class="px-3">NID:</td>
                  <td class="px-3">{{$datas->meter_owner->nid}}</td>
                </tr>
                <tr>
                  <td class="px-3">Address:</td>
                  <td class="px-3">{{$datas->meter_owner->city}}, {{$datas->meter_owner->area}}, {{$datas->meter_owner->flat}}</td>
                </tr>
                <tr>
                  <td class="px-3">Post Code:</td>
                  <td class="px-3">{{$datas->meter_owner->post_code}}</td>
                </tr>
              </tbody>
            </table> --}}
          </div>
          
    </div>

    <div class="flex flex-col justify-center">
        <!-- Table -->
        <div class="w-full mt-8 mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Customers</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class=" font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Date</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Unit</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Net Total</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Payable</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                  <div class="font-semibold text-left">Date</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Status</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Edit / Delete</div>
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                           
                            @foreach ($datas as $data)
                                
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$data->date??''}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$data->unit??''}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$data->net_total??''}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$data->payable??''}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$data->updated_at??''}}</div>
                                    </td>
                                    @if ($data->net_total == $data->paid)
                                    <td class="p-2 whitespace-nowrap">
                                        <span class="bg-purple-700 text-white font-medium rounded-lg text-sm px-3 py-1 mb-2">paid</span>
                                    </td>
                                    @else
                                    <td class="p-2 whitespace-nowrap">
                                      <span class="bg-red-700 text-white font-medium rounded-lg text-sm px-3 py-1 mb-2">unpaid</span>
                                  </td>
                                    @endif
                                                                        
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left flex font-medium text-green-500"><a href="">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                  </svg>
                                            
                                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                  </svg>
                                            </div>
                                        </a></div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection