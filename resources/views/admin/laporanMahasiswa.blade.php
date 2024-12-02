@extends('layouts.appAdmin')

@section('contentAdmin')
    <div class="p-6">

        <!-- Upload Image Section -->
        <div class="bg-white shadow-lg p-14 rounded-lg">
            <div class="mb-6 flex justify-between">
                <div>
                    <label for="upload_image" class="block text-md text-gray-700">Jenis Laporan : </label>
                    <p class="text-lg text-black">Pembayaran SPP</p>
                </div>
                <p>Status :  <span class="bg-blue-500 bg-opacity-20 text-blue-700 px-4 py-2 rounded-md font-bold">Process</span></p>
            </div>
            <div class="mb-6">
                <label for="upload_image" class="block text-md text-gray-700">Bukti Pembayaran : </label>
                <img src="https://picsum.photos/256" alt="" class="h-[100px] w-[100px] object-cover mt-3">
            </div>

            <!-- Input Text Section -->
            <div class="mb-6">
                <label for="text_input" class="block text-md  text-gray-700">Keluhan Mahasiswa</label>
                <textarea disabled id="text_input" name="text_input" class="mt-1 block w-full h-[150px]  text-gray-700 border border-gray-300 rounded-md p-2 bg-[#F5F6FA] resize-none" style="vertical-align: top;"></textarea>
            </div>
        </div>

        <!-- Balas Keluhan Section -->
        <h2 class="my-6 text-3xl font-semibold text-gray-700">Balas Keluhan</h2>
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <div class="mb-6">
                <textarea id="balas_keluhan" placeholder="Masih belum ada balasan...." name="balas_keluhan" class="mt-1 block w-full h-[150px] text-gray-700 border border-gray-300 rounded-md p-2 bg-[#F5F6FA] resize-none" style="vertical-align: top;"></textarea>
            </div>

            <!-- Submit Button Section -->
            <div class="mb-6">
                <button type="submit" class="px-6 py-2 w-full bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">Submit</button>
            </div>
        </div>
    </div>
@endsection
