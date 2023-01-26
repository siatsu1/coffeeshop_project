<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsideController;
use App\Http\Controllers\ProdukController;



Route::get('/', [ClientsideController::class, 'index']);
Route::get('about', [ClientsideController::class, 'about']);
Route::get('course', [ClientsideController::class, 'course']);
Route::get('best', [ClientsideController::class, 'best']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('prosesregistrasi', [AuthController::class, 'prosesregistrasi']);
Route::post('proseslogin', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



Route::prefix('admin')->middleware('auth')->group(function () {

    // beranda
    Route::get('beranda', [AuthController::class, 'beranda']);

    // produk
    Route::get('produk', [ProdukController::class, 'index']);
    Route::get('produk/create', [ProdukController::class, 'create']);
    Route::post('produk/store', [ProdukController::class, 'store']);
    Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::put('produk/edit/store/{id}', [ProdukController::class, 'update']);
    Route::delete('produk/delete/{id}', [ProdukController::class, 'delete']);
 
});













// Route::prefix('menara')->middleware('auth')->group(function () {

//     // Untuk user access Umum

//     // yg lama
//     Route::get('/', [PetaController::class, 'peta']);

//     // untuk user access super admin
//     // untuk user access admin
//     Route::get('beranda', [AuthController::class, 'beranda']);

//     // provider 
//     Route::resource('provider', ProviderController::class);
//     Route::resource('retribusi', RetribusiController::class);
//     Route::resource('retribusiall', RetribusiallController::class);
//     Route::resource('penanggungjawab', PenanggungJawabController::class);
//     // akhir provider


//     // Menara
//     Route::get('index', [MenaraController::class, 'index']);
//     // edit menara
//     Route::get('update/{id}', [MenaraController::class, 'edit']);
//     Route::put('updatestore/{id}', [MenaraController::class, 'update']);
//     // Hapus Menara
//     Route::delete('index/{menara}', [MenaraController::class, 'delete']);

//     // create penanggung jawab dari halaman menara
//     Route::get('index/penanggungjawab/{id}', [MenaraController::class, 'pj']);
//     Route::post('index/penanggungjawab', [MenaraController::class, 'storepj']);
//     // edit penanggung jawab dari halaman menara
//     Route::get('index/penanggungjawab/{id}/edit', [MenaraController::class, 'pjedit']);
//     Route::put('updatepjstore/{id}', [MenaraController::class, 'updatepj']);

//     // tambah data menara

//     Route::get('create1', [MenaraController::class, 'create1']);
//     Route::get('create2', [MenaraController::class, 'create2']);
//     Route::get('create3', [MenaraController::class, 'create3']);
//     Route::post('store1', [MenaraController::class, 'store1']);
//     Route::post('store2', [MenaraController::class, 'store2']);
//     Route::post('store3', [MenaraController::class, 'store3']);

//     Route::post('storefoto', [MenaraController::class, 'storefoto']);
//     Route::get('lihatfoto/{menara}', [MenaraController::class, 'galerifoto']);
//     Route::delete('deletegambar/{id}', [MenaraController::class, 'deletegambar']);


//     // detail menara
//     Route::get('detail/{menara}', [MenaraController::class, 'detail']);

//     // PETA PERSEBARAN KHUSUS ADMIN
//     Route::get('petaadmin', [PetaadminController::class, 'index']);
//     Route::get('cari/{id}', [PetaadminController::class, 'cariberdasarkanprovider']);
//     // AKHIR PETA PERSEBARAN KHUSUS ADMIN



//     Route::post('wfh/buat_wfh', [WfhController::class, 'store']);

//     Route::delete('wfh/{wfh}', [WfhController::class, 'destroy']);

//     Route::put('buat/{sintaripegawai}', [SptController::class, 'buat']);
//     }
// });
