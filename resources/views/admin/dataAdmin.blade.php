@extends('layouts.appAdmin')

@section('contentAdmin')
<div class="p-4 sm:p-6">
    <div class="flex justify-between items-center mt-2">
        <h3 class="text-2xl sm:text-3xl font-semibold">Data Admin</h3>
        <a href="{{ route('admin.tambahAdmin') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah Admin</a>
    </div>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-md flex items-center justify-center">
        <div class="w-full overflow-x-auto">
            <table class="mt-4 w-full text-sm">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-center">NO</th>
                        <th class="px-4 py-2 text-center">NIK Admin</th>
                        <th class="px-4 py-2 text-center">Nama</th>
                        <th class="px-4 py-2 text-center">Email</th>
                        <th class="px-4 py-2 text-center">No Telefon</th>
                        <th class="px-4 py-2 text-center">Status</th>
                        <th class="px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-24">
                        <td class="px-4 py-2 border-t border-b text-center">1</td>
                        <td class="px-4 py-2 border-t border-b text-center">1234567890</td>
                        <td class="px-4 py-2 border-t border-b text-center">Ahmad Saufi</td>
                        <td class="px-4 py-2 border-t border-b text-center">ahmad@gmail.com</td>
                        <td class="px-4 py-2 border-t border-b text-center">081234567890</td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <span class="bg-green-500 bg-opacity-20 text-green-700 px-4 py-2 rounded-md font-bold">Active</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Nonaktif</button>
                            <button class="bg-black text-white px-4 py-2 rounded-md">Blacklist</button>
                        </td>
                    </tr>
                    <tr class="h-24">
                        <td class="px-4 py-2 border-t border-b text-center">2</td>
                        <td class="px-4 py-2 border-t border-b text-center">9876543210</td>
                        <td class="px-4 py-2 border-t border-b text-center">Firdaus</td>
                        <td class="px-4 py-2 border-t border-b text-center">firdaus@gmail.com</td>
                        <td class="px-4 py-2 border-t border-b text-center">089876543210</td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <span class="bg-green-500 bg-opacity-20 text-green-700 px-4 py-2 rounded-md font-bold">Active</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Nonaktif</button>
                            <button class="bg-black text-white px-4 py-2 rounded-md">Blacklist</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
