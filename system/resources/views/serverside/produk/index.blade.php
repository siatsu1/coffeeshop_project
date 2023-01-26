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


<div class="card">
    <div class="card-header py-3"> 
        <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-md-6 me-auto">
                <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="search produts">
                </div>
            </div>
            <div class="col-lg-6 col-6 col-md-6 ">
                <div class="d-flex justify-content-end mb-2">
                    <a class="btn btn-primary btn-sm " href="{{url('admin/produk/create')}}">
                        <i class="lni lni-circle-plus"></i> Tambah Produk
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="product-grid">
            <div class="row  g-3">
                @foreach($produk as $data)
                <div class="col-6">
                    <div class="card border shadow-none mb-0">
                        <div class="card-body text-center ">
                           <div class="row">
                                <div class="col-4">
                                    <img src="{{url('public/app/produk')}}\{{$data->foto}}" class="img-fluid mb-3" alt="" />
                                    <h6 class="product-title text-capitalize">{{$data->nama}}</h6>
                                    <p class="product-price fs-5 mb-1"><span>Rp. {{number_format($data->harga)}}</span></p>
                                    
                                </div>
                                <div class="col-8 text-left">
                                    <p style="text-align: left" class="">{{$data->deskripsi}}</p>
                                    <div class="actions d-flex align-items-center justify-content-end gap-2 mt-3">
                                        <a href="{{url('admin/produk/edit', $data->id)}}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                        @include('template.delete', ['url' => url('admin/produk/delete', $data->id)])

                                    </div>
                                </div>
                                
                           </div>
                            
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
        <nav class="float-end mt-4" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

@endsection