<!-- resources/views/dashboard.blade.php -->
@extends('layouts.appUser')

@section('contentUser')
    <h2 class="text-3xl font-semibold text-gray-700">Dashboard</h2>
    <div class="mt-6 flex flex-wrap gap-6">
        <div class="bg-white p-4 rounded-lg shadow-md sm:w-[262px] w-full flex justify-between sm:justify-around items-start">
            <div>
                <h3 class="text-lg text-[rgba(0,0,0,0.6)] font-semibold">Antrian Sekarang</h3>
                <p class="text-2xl font-bold mt-2">9</p>
            </div>
            <div style="background-color: rgba(130, 128, 255, 0.3);" class="w-14 h-14 rounded-2xl flex items-center justify-center">
                <span class="iconify text-3xl text-[#3D42DF]" data-icon="ion:people" data-inline="false" style="transform: scaleX(-1);"></span>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md sm:w-[262px] w-full flex justify-between sm:justify-around items-start">
            <div>
                <h3 class="text-lg text-[rgba(0,0,0,0.6)] font-semibold">Total Antrian</h3>
                <p class="text-2xl font-bold mt-2">10</p>
            </div>
            <div style="background-color: rgba(254, 197, 61, 0.3);" class="w-14 h-14 rounded-2xl flex items-center justify-center">
                <span class="iconify text-3xl text-[#FEC53D]" data-icon="ri:box-3-fill" data-inline="false"></span>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md sm:w-[262px] w-full flex justify-between sm:justify-around items-start">
            <div>
                <h3 class="text-lg text-[rgba(0,0,0,0.6)] font-semibold">Antrian Kamu</h3>
                <p class="text-2xl font-bold mt-2">10</p>
            </div>
            <div style="background-color: rgba(4, 173, 145, 0.3);" class="w-14 h-14 rounded-2xl flex items-center justify-center">
                <span class="iconify text-3xl text-[#4AD991]" data-icon="lucide:chart-line" data-inline="false"></span>
            </div>
        </div>
    </div>

    <!-- Example of other content -->
    <div class="flex justify-between items-center mt-8">
        <h3 class="text-2xl sm:text-3xl font-semibold">Laporan Cepat</h3>
        <a href="{{ route('user.tambahLaporan') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Buat Laporan</a>
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
                            <span class="bg-green-500 bg-opacity-20 text-green-700 px-4 py-2 rounded-md font-bold">Completed</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <a href="{{ route('user.lihatLaporan') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Lihat</a>
                        </td>
                    </tr>
                    <tr class="h-24">
                        <td class="px-4 py-2 border-t border-b text-center">1</td>
                        <td class="px-4 py-2 border-t border-b text-center">001</td>
                        <td class="px-4 py-2 border-t border-b text-center">Pembayaran SPP</td>
                        <td class="px-4 py-2 border-t border-b text-center">Foto Bukti Transaksi</td>
                        <td class="px-4 py-2 border-t border-b text-center">-</td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <span class="bg-purple-500 bg-opacity-20 text-purple-700 px-4 py-2 rounded-md font-bold">Processing</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <a href="{{ route('user.lihatLaporan') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Lihat</a>
                        </td>
                    </tr>
                    <tr class="h-24">
                        <td class="px-4 py-2 border-t border-b text-center">1</td>
                        <td class="px-4 py-2 border-t border-b text-center">001</td>
                        <td class="px-4 py-2 border-t border-b text-center">Pembelian</td>
                        <td class="px-4 py-2 border-t border-b text-center">Foto Bukti Transaksi</td>
                        <td class="px-4 py-2 border-t border-b text-center">-</td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <span class="bg-red-500 bg-opacity-20 text-red-700 px-4 py-2 rounded-md font-bold">Rejected</span>
                        </td>
                        <td class="px-4 py-2 border-t border-b text-center">
                            <a href="{{ route('user.lihatLaporan') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Lihat</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

