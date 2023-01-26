<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\SimtelMenara;
use App\Models\SimtelFoto;
use App\Models\SimtelProvider;
use App\Models\SimtelTinggi;
use App\Models\SimtelTipe;
use App\Models\SimtelFrekuensi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;


class SwastaController extends Controller
{

  function peta()
  {
    $tambahfoto = $data['persebaran_menara'] = SimtelMenara::where('status', '=', 0)->where('jenis', 'swasta')->get();
    foreach ($tambahfoto as $x) {
      $x->foto = SimtelFoto::where('menara_id', $x->menara_id)->first();
      $x->id = Crypt::encrypt($x->menara_id);
    }

    $provider = $data['provider'] = SimtelProvider::where('provider_id', '!=', 25)
      ->where('provider_id', '!=', 26)
      ->get();
    foreach ($provider as $x) {
      $x->id = Crypt::encrypt($x->provider_id);
      $x->jumlah_menara = SimtelMenara::where('provider_id', $x->provider_id)->get();
    }
    return view('swasta.peta', $data);
  }

  function cariberdasarkanprovider($id)
  {
    // id dari provider
    $id_decrypt = Crypt::decrypt($id);
    $tambahfoto = $data['persebaran_menara'] = SimtelMenara::where('provider_id', $id_decrypt)
      ->where('tidak_aktif', '=', 0)->get();
    foreach ($tambahfoto as $x) {
      $x->foto = SimtelFoto::where('menara_id', $x->menara_id)->first();
      // $x->id = Crypt::encrypt($x->menara_id);
    }

    $data['provider_ygdicari'] = SimtelProvider::where('provider_id', $id_decrypt)->first();
    $provider = $data['provider'] = SimtelProvider::where('provider_id', '!=', 25)
      ->where('provider_id', '!=', 26)
      ->get();
    foreach ($provider as $x) {
      $x->id = Crypt::encrypt($x->provider_id);
      $x->jumlah_menara = SimtelMenara::where('provider_id', $x->provider_id)->get();
    }
    return view('swasta.cari', $data);
  }

  function index()
  {
    $list_menara = $data['list_menara'] = SimtelMenara::where('jenis', '=', 'swasta')->orderBy('updated_at', 'desc')->get();

    return view('swasta.index', $data);
  }


  function create2()
  {
    $data['list_provider'] = SimtelProvider::where('provider_id', '!=', 25)->where('provider_id', '!=', 26)->get();

    $data['tinggi'] = SimtelTinggi::all();
    $data['tipe'] = SimtelTipe::all();
    $data['kabupaten'] = Kabupaten::where('prov_id', 20)->get();

    return view('swasta.create2', $data);
  }

  function store2()
  {
    $provider = SimtelProvider::where('provider_nama', request('provider'))->first();
    $provider_id = $provider->provider_id;

    $kabupaten = Kabupaten::where('city_id', request('kabupaten'))->first();
    $kecamatan = Kecamatan::where('dis_id', request('kecamatan'))->first();
    $desa = Desa::where('subdis_id', request('desa'))->first();

    $menara = new SimtelMenara;
    // // kiri= nama (database), kanan= nama(codingan view)
    $menara->id_site = request('id_site');
    $menara->provider = request('provider');
    $menara->jenis = 'swasta';
    $menara->provider_id = $provider_id;
    $menara->tinggi_menara = request('tinggi_menara');
    $menara->jalan = request('jalan');

    $menara->kabupaten = $kabupaten->city_name;
    $menara->kecamatan = $kecamatan->dis_name;
    $menara->desa = $desa->subdis_name;
    $menara->tipe_tower = request('tipe_tower');
    $menara->kaki_tower = request('kaki_tower');
    $menara->transmisi = request('transmisi');
    $menara->menara_ssid = request('ssid');
    $menara->menara_log =  Auth::user()->id;

    $menara->lat = request('latitude');
    $menara->long = request('longitude');
    $menara->status = 0;
    $menara->save();

    $menara_id = $menara->menara_id;
    $jumlah_frekuensi = count(request('frekuensi'));
    $data_frekuensi = request('frekuensi');

    for ($i = 0; $i < $jumlah_frekuensi; $i++) {
      $frekuensi = new SimtelFrekuensi();
      $frekuensi->frekuensi_menara_id = $menara_id;
      $frekuensi->frekuensi_nama = $data_frekuensi[$i];
      $frekuensi->save();
    }
    $id_menara = $menara->menara_id;
    $redirect = encrypt($id_menara);
    return redirect('admin/detail/' . $redirect)->with('success', 'Data Menara berhasil ditambah');
  }

  function delete(SimtelMenara $id)
  {

    SimtelFrekuensi::where('frekuensi_menara_id', $id->menara_id)->delete();

    $cari_foto = SimtelFoto::where('menara_id', $id->menara_id)->get();

    foreach ($cari_foto as $x) {

      $path = 'public/app/gambar/' . $x->foto;
      if (file_exists($path)) {
        unlink($path);
      }
    }
    SimtelFoto::where('menara_id', $id->menara_id)->delete();
    $id->delete();
    return redirect('admin/swasta')->with('success', 'Data menara Berhasil Dihapus');
  }
}
