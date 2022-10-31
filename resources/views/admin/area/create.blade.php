@extends('admin.layouts.master')

@section('dashboard')
<div class="p-3">

    <div class="flex justify-end pt-4 pr-3">
        <a href="{{route('area.index')}}"><p class="bg-sky-500 text-white px-3 py-2 font-semibold rounded-lg">Show Area</p></a>
    </div>

    @if(session()->has('success'))
        <div class="w-full bg-green-500 text-white py-2 px-4 rounded">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="POST" action="{{route('area.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mt-5">
        {{-- <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
        </div> --}}

        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="area_code"  onchange="toUperCase()" id="code" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
              <label for="area_code" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Area Code</label>
              @error('area_code')
                <div class="text-red-600 text-sm">{{ $message }}</div>
              @enderror
          </div>
          <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="address" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
              <label for="address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
              @error('address')
                <div class="text-red-600 text-sm">{{ $message }}</div>
              @enderror
          </div>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>

<script>
    function toUperCase(){
        const code = document.getElementById('code');
        code.value = code.value.toUpperCase();
    }
</script>
@endsection