<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;


use App\Models\Produk;


class ClientsideController extends Controller
{

  function index()
  {
    return view('Clientside.home');
  }
  function about()
  {
    return view('Clientside.about');
  }
  function course()
  {
    return view('Clientside.course');
  }
  function best()
  {
    $data['produk'] = Produk::all();
    return view('Clientside.best', $data);
  }

}
