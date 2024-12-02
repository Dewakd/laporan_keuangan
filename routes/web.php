<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users/dashboard');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

Route::get('/user', function () {
    return view('user/dashboard');
})->name('user.dashboard');

Route::get('/user/history-laporan', function () {
    return view('user/historyLaporan');
})->name('user.historyLaporan');

Route::get('/user/tambah-laporan', function () {
    return view('user/tambahLaporan');
})->name('user.tambahLaporan');

Route::get('/user/lihat-laporan', function () {
    return view('user/lihatLaporan');
})->name('user.lihatLaporan');

Route::get('/user/setting-user', function () {
    return view('user/settingUser');
})->name('user.settingUser');











Route::get('/admin/history-laporan', function () {
    return view('admin/historyLaporan');
})->name('admin.historyLaporan');

Route::get('/admin/laporan-mahasiswa', function () {
    return view('admin/laporanMahasiswa');
})->name('admin.laporanMahasiswa');

Route::get('/admin/data-mahasiswa', function () {
    return view('admin/dataMahasiswa');
})->name('admin.dataMahasiswa');

Route::get('/admin/data-admin', function () {
    return view('admin/dataAdmin');
})->name('admin.dataAdmin');

Route::get('/admin/tambah-mahasiswa', function () {
    return view('admin/tambahMahasiswa');
})->name('admin.tambahMahasiswa');

Route::get('/admin/tambah-admin', function () {
    return view('admin/tambahAdmin');
})->name('admin.tambahAdmin');

Route::get('/admin/setting-admin', function () {
    return view('admin/settingAdmin');
})->name('admin.settingAdmin');
