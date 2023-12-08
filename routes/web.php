<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin');
});
Route::get('/client-detail', function () {
    return view('client-detail');
});

Route::get('/edit.blade.php', function () {
    return view('edit');
});

Route::get('/tambah_data.blade.php', function () {
    return view('tambah_data');
});

Route::get('/detail_talent.blade.php', function () {
    return view('detail_talent');
});

Route::get('/admin.blade.php', function () {
    return view('admin');
});

Route::get('/statistik.blade.php', function () {
    return view('statistik');
});

Route::get('/statistik_detail.blade.php', function () {
    return view('statistik_detail');
});
