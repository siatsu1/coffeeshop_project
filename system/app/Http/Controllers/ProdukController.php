<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

use App\Models\Produk;


class ProdukController extends Controller
{

  function index()
  {
    $data['produk'] = Produk::all();
    return view('serverside.produk.index', $data);
  }

  function create()
  {
    return view('serverside.produk.create');
  }

  function store(request $request)
  {  
    $simpan = new Produk;
    $simpan->nama = request('nama');
    $simpan->deskripsi = request('deskripsi');
    $simpan->harga = request('harga');
    $simpan->handleUploadFoto();
    $simpan->save();
    return redirect('admin/produk')->with('success', 'Berhasil Menambahkan Produk baru');
  }

  function update(request $request)
  {  
    $simpan = Produk::where('id', $request->id)->first();
    $simpan->nama = request('nama');
    $simpan->deskripsi = request('deskripsi');
    $simpan->harga = request('harga');
    $simpan->handleUploadFoto();
    $simpan->save();
    return redirect('admin/produk')->with('success', 'Berhasil Menambahkan Produk baru');
  }

  function edit(request $request)
  {

   $data['produk'] = Produk::where('id', $request->id)->first();
    return view('serverside.produk.edit', $data);
  }

  function delete(request $request)
  {

   $data['produk'] = Produk::where('id', $request->id)->delete();
    return back()->with('success', 'Produk berhasil di hapus');
  }

}
