@extends('admin.layouts.master')

@section('dashboard')
<div class="flex justify-center pt-10 bg-gray-150">
        
    <div class="my-2 inline-block">
      <table class="font-semibold">
        <tbody class="">
          <tr>
            <td class="px-3">Name:</td>
            <td class="px-3"><input type="text" value="{{$data->owner_name}}" name="" id=""></td> 
          </tr>
          <tr>
            <td class="px-3">Father Name:</td>
            <td class="px-3"><input type="text" value="{{$data->father_name}}" name="" id=""></td>
          </tr>
          <tr>
            <td class="px-3">Phone:</td>
            <td class="px-3"><input type="text" value="0{{$data->phone}}"></td>
          </tr>
          <tr>
            <td class="px-3">NID:</td>
            <td class="px-3"><input type="text" value="{{$data->nid}}"></td>
          </tr>
          <tr>
            <td class="px-3">City:</td>
            <td class="px-3"><input type="text" value="{{$data->city}}"></td>
          </tr>
          <tr>
            <td class="px-3">Area:</td>
            <td class="px-3"><input type="text" value="{{$data->area}}"></td>
          </tr>
          <tr>
            <td class="px-3">Flat No:</td>
            <td class="px-3"><input type="text" value="{{$data->flat}}"></td>
          </tr>
          <tr>
            <td class="px-3">Post No:</td>
            <td class="px-3"><input type="text" value="{{$data->post_code}}"></td>
          </tr>
        </tbody>
      </table>
    </div>
    
</div>
@endsection