@extends('layouts.appAdmin')

@section('contentAdmin')
<div class="p-4 sm:p-6">
    <div class="flex justify-between items-center mt-2">
        <h3 class="text-2xl sm:text-3xl font-semibold">Tambah Mahasiswa</h3>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
        <form action="" method="post" class="flex flex-col gap-3">
            <div class="flex flex-col">
                <label for="name" class="text-lg font-semibold mb-2">NIK</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div class="flex flex-col">
                <label for="name" class="text-lg font-semibold mb-2">Nama</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div class="flex flex-col">
                <label for="name" class="text-lg font-semibold mb-2">Email</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div class="flex flex-col mb-5">
                <label for="name" class="text-lg font-semibold mb-2">No Telefon</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div class="flex flex-col mb-5">
                <label for="name" class="text-lg font-semibold mb-2">Password</label>
                <input type="password" name="name" id="name" class="border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div class="flex flex-col mb-5">
                <label for="name" class="text-lg font-semibold mb-2">Confirm Password</label>
                <input type="password" name="name" id="name" class="border border-gray-300 rounded-md px-4 py-2">
            </div>
            <div class="mt-5">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md ">Simpan</button>
            </div>
        </form>



    </div>
</div>
@endsection