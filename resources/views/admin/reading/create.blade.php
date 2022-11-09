@extends('admin.layouts.master')

@section('dashboard')
@can('worker')
 
<div class="p-3">

  <div class="flex justify-end pt-6 pr-3">
      <a href="{{route('reading.index')}}"><p class="bg-sky-500 text-white px-3 py-2 font-semibold rounded-lg">View Reading</p></a>
  </div>

    @if(session()->has('success'))
        <div class="w-full bg-green-500 text-white py-2 px-4 rounded">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="POST" action="{{route('reading.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mt-5">
        
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 mb-6 w-full group">
            <select name="area_id" id="area_id" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                <option value="">---select---</option>
                @foreach ($areas as $area)
                <option value="{{$area->id}}">{{$area->area_code}}</option>
                @endforeach
            </select>
            <label for="area_code" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Area Code</label>
          </div>
          <div class="relative z-0 mb-6 w-full group">
            <div class="relative z-0 mb-6 w-full group">
              <select name="meter_id" id="meter_id" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                  <option value="">---select---</option>
                  @foreach ($meters as $meter)
                  <option value="{{$meter->id}}">{{$meter->meter_id}}</option>
                  @endforeach
              </select>
              <label for="area_code" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Meter</label>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 mb-6 w-full group">
              <input type="number" name="unit" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
              <label for="unit" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Unit</label>
              @error('unit')
                <div class="text-red-600 text-sm">{{ $message }}</div>
              @enderror
          </div>
          <div class="relative z-0 mb-6 w-full group">
              <input type="date" name="date"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
              <label for="date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Added Date</label>
              @error('address')
                <div class="text-red-600 text-sm">{{ $message }}</div>
              @enderror
          </div>
          
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          
          <div class="relative z-0 mb-6 w-full group">
              <input type="date" name="last_date"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
              <label for="last_date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last Date</label>
              @error('last_date')
                <div class="text-red-600 text-sm">{{ $message }}</div>
              @enderror
          </div>
          
        </div>

        

        {{-- <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="owner_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="owner_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Owner Name</label>
        </div> --}}

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#area_id").change(function(){
            var hello = $("#area_id").val();
            var u = "{{route('getAreaMeterSection', 'id')}}";
            var url = u.replace('id', hello);
            var value = '';
            $.get(url, function(data){
                if(data){
                    $("#meter_id").empty();
                    $("#meter_id").append('<option value="">--Select--</option>');
                    $.each(data,function(key,value){
                        $("#meter_id").append('<option value="'+value.id+'">'+value.meter_id+'</option>');
                    });
                }else{
                    $("#meter_id").empty();
                }
            });
        });
    });
</script>

    {{-- @section('jquery')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endsection --}}
 
  @endcan

@endsection