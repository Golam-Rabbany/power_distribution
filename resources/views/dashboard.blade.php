@extends('admin.layouts.master')

@section('dashboard')
    
    <section class="p-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="px-10 py-5 bg-green-500 flex justify-center items-center">
                <div class="text-white">
                    <p class="text-xl">Total Owner</p>
                    <p class="text-center">{{App\Models\Owner::all()->count()}}</p>
                </div>
            </div>
            <div class="px-10 py-5 bg-green-500 flex justify-center items-center">
                <div class="text-white">
                    <p class="text-xl">Total Meter</p>
                    <p class="text-center">{{App\Models\Meter::all()->count()}}</p>
                </div>
            </div>
            <div class="px-10 py-5 bg-green-500 flex justify-center items-center">
                <div class="text-white">
                    <p class="text-xl">Total Area</p>
                    <p class="text-center">{{App\Models\Area::all()->count()}}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
