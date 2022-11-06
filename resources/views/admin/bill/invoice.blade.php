@extends('admin.layouts.master')

@section('dashboard')
<div class="px-10 py-10">
    <div class="flex justify-between ">
      <div>
        <span class="text-3xl font-bold ">Electric Bill </span>
      </div>
      <div class="text-right">
        <p class="text-xl font-semibold">MM_ELECTRIC SOFT</p>
        <p class="text-xl ">Jhigatola, Dhanmondi</p>
        <p class="text-xl ">Dhaka</p>
        <p class="text-xl ">Date : 06 November 2022</p>
      </div>
    </div>
  
    <div>
      <p class="text-xl font-bold">Bill To,</p>
        <div>
          <p>Name: Golam Rabbany</p>
          <p>Phone: 014758236</p>
          <p>NID: 454758236</p>
          <p>Address: Jhigatola, Dhanmondi</p> 
        </div>
    </div>
  
    <div>
    <div class="my-8">
      <div class="overflow-x-auto">
          <table class="table-auto w-full">
              <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-200">
                  <tr>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Name</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Email</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Spent</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-center">Country</div>
                      </th>
                  </tr>
              </thead>
              <tbody class="text-sm divide-y bg-gray-100 divide-gray-100">
                  <tr>
                      <td class="p-2 whitespace-nowrap">
                          <div class="flex items-center">
                              <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                              <div class="font-medium text-gray-800">Alex Shatov</div>
                          </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left">alexshatov@gmail.com</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left font-medium text-green-500">$2,890.66</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-lg text-center">??</div>
                      </td>
                  </tr>
                  <tr>
                      <td class="p-2 whitespace-nowrap">
                          <div class="flex items-center">
                              <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                              <div class="font-medium text-gray-800">Alex Shatov</div>
                          </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left">alexshatov@gmail.com</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left font-medium text-green-500">$2,890.66</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-lg text-center">??</div>
                      </td>
                  </tr>
              </tbody>
          </table>
          <table class="flex justify-end my-5">
            <tbody>
              <tr>
                <td class="px-1 font-semibold text-lg ">Sub Total :</td> 
                <td class="px-1 font-semibold text-lg "> 24289</td>
              </tr>
              <tr>
                <td class="px-1 font-semibold text-lg ">Tax Charge :</td> 
                <td class="px-1 font-semibold text-lg "> 24289</td>
              </tr>
              <tr>
                <td class="px-1 font-semibold text-lg ">Other Charge :</td> 
                <td class="px-1 font-semibold text-lg "> 00</td>
              </tr>
              <tr>
                <td class="px-1 text-xl font-bold">Total :</td> 
                <td class="px-1 text-xl font-bold"> 28322</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  </div>
@endsection