<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    public $timestamps = false;

    function handleUploadFoto()
    {
      
        if (request()->hasFile('fotoproduk')) {
            $foto = request()->file('fotoproduk');
            $destination = "produk";
            $randomStr = Str::random(5);
            $filename = "produk-" . time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = $filename;
            $this->save();
        }

      
    }
}
