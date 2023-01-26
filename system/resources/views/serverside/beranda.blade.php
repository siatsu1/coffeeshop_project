@extends('template.base')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title"> Caramel Macchiato</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Coffee Best Seller</h6>
                       
                            <p class="card-text mt-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <img src="{{ url('public')}}\app\images\b1.png" class="user-img" alt="" style="width:70px; height: 70px;">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">Hazelnut Latte</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Coffee Best seller</h6>
                            <p class="card-text mt-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <img src="{{ url('public')}}\app\images\b2.png" class="user-img" alt="" style="width:70px; height: 70px;">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection