<?php

use App\Http\Controllers\Karyawan_controller;
use App\Models\Karyawan_model;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
})->name('home');



Route::get('/list-karyawan', function () {
    $dataKaryawan = Karyawan_model::all();
    $jumlahRow = $dataKaryawan->count();
    return view('list-karyawan', [
        "dataKaryawan" => $dataKaryawan,
        "jumlahRow" => $jumlahRow
    ]);
})->name('listkaryawan');

Route::get("/list-karyawan/{id}", [Karyawan_controller::class, "deleteKaryawan"])->name("deleteKaryawan");



Route::get('/tambah-karyawan', function () {
    return view('tambah-karyawan');
})->name('tambahkaryawan'); 

Route::post('/tambah-karyawan', [Karyawan_controller::class, "tambahKaryawan"])->name("postKaryawan");



Route::get('/edit-karyawan', function () {
    $dataKaryawan = Karyawan_model::all();
    return view('edit-karyawan', ["dataKaryawan" => $dataKaryawan]);
})->name('edit-karyawan');

Route::get('/edit-karyawan/{id}', [Karyawan_controller::class, "geteditKaryawan"])->name("editKaryawan");
Route::put('/edit-karyawan/{id}', [Karyawan_controller::class, "editKaryawan"])->name("editKaryawan");

