@extends('layouts.appAdmin')

@section('contentAdmin')
<div class="p-6">
    <div class="flex justify-between items-center mt-2">
        <h3 class="text-2xl sm:text-3xl font-semibold">History Laporan</h3>
    </div>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-md flex items-center justify-center">
        <div class="w-full overflow-x-auto">
            <table class="mt-4 w-full text-sm">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-center">NO</th>
                        <th class="px-4 py-2 text-center">No Laporan</th>
                        <th class="px-4 py-2 text-center">Tipe Laporan</th>
                        <th class="px-4 py-2 text-center">Bukti Transaksi</th>
                        <th class="px-4 py-2 text-center">Keterangan</th>
                        <th class="px-4 py-2 text-center">Status</th>
                        <th class="px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-24">
                        <td class="px-4 py-2 border-t border-b text-center">1</td>
                        <td class="px-4 py-2 border-t border-b text-center">001</td>
                        <td class="px-4 py-2 border-t border-b text-center">Pembayaran SPP</td>
                        <td class="px-4 py-2 border-t border-b text-center">Foto Bukti Transaksi</td>
                        <td class="px-4 py-2 border-t border-b text-center">-</td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <span class="bg-red-500 bg-opacity-20 text-red-700 px-4 py-2 rounded-md font-bold">Pending</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Proses</button>
                        </td>
                    </tr>
                    <tr class="h-24">
                        <td class="px-4 py-2 border-t border-b text-center">2</td>
                        <td class="px-4 py-2 border-t border-b text-center">002</td>
                        <td class="px-4 py-2 border-t border-b text-center">Pembayaran SPP</td>
                        <td class="px-4 py-2 border-t border-b text-center">Foto Bukti Transaksi</td>
                        <td class="px-4 py-2 border-t border-b text-center">-</td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <span class="bg-green-500 bg-opacity-20 text-green-700 px-4 py-2 rounded-md font-bold">Completed</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <button class="bg-green-500 text-white px-4 py-2 rounded-md">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
