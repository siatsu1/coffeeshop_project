@extends('template.base')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <!--breadcrumbs start -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Produk</a></li>
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
          <h5 class="mt-2">PRODUK COFFEE PAKDE</h5>
        </div>

      </header>
      <div class="card-body">

        <div class="adv-table">
          <div class="d-flex justify-content-end mb-2">
            <a class="btn btn-primary btn-sm" href="{{url('admin/bakticreate2')}}">
              <i class="fa fa-plus"></i> Tambah Produk
            </a>
          </div>
          <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
              <thead>
                <tr class="text-center text-uppercase">
                  <th>AKSI</th>
                  <th>Produk</th>
                  <th>Deskripsi</th>
                  <th>Foto</th>
                </tr>
              </thead>
              <tbody>
                @foreach($produk as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->deskripsi}}</td>
                    <td>{{$data->foto}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
    </section>
  </div>
</div>

@endsection