@extends('template.base')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <!--breadcrumbs start -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{url('admin/produk')}}"><i class="fa fa-home"></i> Produk</a></li>
        <li class="breadcrumb-item"><a href="#">Tambah Produk</a></li>
      </ol>
    </nav>
    <!--breadcrumbs end -->
  </div>
</div>


<div class="row">
  <div class="col-sm-12">
    <section class="card">
      <header class="card-header text-uppercase">
        <div class="card-header d-flex flex-column justify-content-center text-center">
          <h5 class="mt-2">Tambah Produk</h5>
        </div>

      </header>
      <div class="card-body">


      <form action="{{url('admin/produk/store')}}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Harga Produk</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" rows="4" cols="4" name="deskripsi"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Gambar Produk</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="fotoproduk"  accept=".jpeg,.jpg,.png">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>                
                </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>

@endsection