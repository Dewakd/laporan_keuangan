@extends('layouts.appUser')

@section('contentUser')
    <div class="p-6">

        <!-- Upload Image Section -->
        <div class="bg-white shadow-lg p-14 rounded-lg">
            <div class="mb-6 flex justify-between">
                <div>
                    <label for="upload_image" class="block text-md text-gray-700">Jenis Laporan</label>
                    <select id="upload_image" name="upload_image" class="mt-1 block bg-gray-100 border border-gray-300 p-3">
                        <option value="option1">Pembayaran SPP</option>
                        <option value="option2">Pembayaran UTS</option>
                        <option value="option3">Pembayaran Wisuda</option>
                    </select>
                </div>
            </div>
            <div class="mb-6">
                <label for="upload_image" class="block text-md text-gray-700">Upload Bukti Pembayaran</label>
                <input type="file" id="upload_image" name="upload_image" class="my-2 block text-gray-700 ">
                <img src="https://picsum.photos/256" alt="" class="h-[100px] w-[100px] object-cover">
            </div>


            <!-- Input Text Section -->
            <div class="mb-6">
                <label for="text_input" class="block text-md  text-gray-700">Ketik Keluhan</label>
                <textarea placeholder="Ketik keluhan kamu disini" id="text_input" name="text_input" class="mt-1 block w-full h-[150px]  text-gray-700 border border-gray-300 rounded-md p-2 bg-[#F5F6FA] resize-none" style="vertical-align: top;"></textarea>
            </div>

            <div class="mb-6">
                <button type="submit" class="px-6 py-2 w-full bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">Submit</button>
            </div>
        </div>
    </div>
@endsection
