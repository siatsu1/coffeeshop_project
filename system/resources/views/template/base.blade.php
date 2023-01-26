

@php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp

<!doctype html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="icon" href="" type="image/png" /> -->
  <!--plugins-->
  <link href="{{ url('public') }}/assets_onedash/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

  @stack('csstambahan')

  <!-- fontawesome -->
  <link href="{{ url('public') }}/assets/fontawesome/css/all.min.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="{{ url('public') }}/assets_onedash/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/css/style.css" rel="stylesheet" />
  <link href="{{ url('public') }}/assets_onedash/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

 
  <!-- loader-->
  <link href="{{ url('public') }}/assets_onedash/css/pace.min.css" rel="stylesheet" />


  <title>COFFEE</title>
  <style>
    .logo-text {
      font-size: 25px !important;
      font-family: 'Black Ops One', cursive;
      /* font-family: 'Bungee Shade', cursive; */
      /* font-family: 'Sonsie One', cursive; */
      color: cornflowerblue !important;
    }

    th {
      text-align: center;
    }

    .pendek {
      width: 60px;
    }

    .judul {
      display: none;
    }

    .peta-admin {
      height: 80vh;
    }

    .list-provider {
      height: 80vh;
      overflow: auto;
    }

    #map {
      width: 100%;
      height: 100%;
    }

    @media (min-width: 768px) {
      .judul {
        display: block;
      }
    }
  </style>
</head>

<!-- dikasi onload  agar nampil lat long -->

<body id="page-top">


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
          <i class="bi bi-list"></i>
        </div>
        <p class="text-uppercase mt-3 judul">
          Coffee Shop Pakde
        </p>
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret btn btn-light btn-sm radius-30" style="padding: 0 10px;" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center">
                  <img src="{{ url('public')}}\app\images\user.png" class="user-img" alt="">
                  <div class="text-uppercase" style="font-size: 12px; margin-left: 10px;">
                   
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="{{ url('public')}}\app\images\user.png" alt="" class="rounded-circle" width="54" height="54">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name text-uppercase">  {{ Auth::user()->nama }}</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary"></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>


               
                <li>
                  <a class="dropdown-item" href="{{ url('logout') }}">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-lock-fill"></i></div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    @include('template.sidebar')
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">
      @yield('content')
    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->


  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{ url('public') }}/assets_onedash/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ url('public') }}/assets_onedash/js/jquery.min.js"></script>
  <script src="{{ url('public') }}/assets_onedash/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ url('public') }}/assets_onedash/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{ url('public') }}/assets_onedash/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

  <script src="{{ url('public') }}/assets_onedash/js/pace.min.js"></script>

 

  {{-- datatable --}}
  <script src="{{ url('public') }}/assets_onedash/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="{{ url('public') }}/assets_onedash/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{ url('public') }}/assets_onedash/js/table-datatable.js"></script>
  {{-- datatable --}}
  <!--app-->
  <script src="{{ url('public') }}/assets_onedash/js/app.js"></script>
  <script src="{{ url('public') }}/assets_onedash/js/index2.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
  </script>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @foreach(['success', 'warning', 'error', 'info'] as $status)
        @if (session($status))
        <script>
            swal({
                title: "{{ Str::upper($status) }}",
                text: "{{ session($status) }}!",
                icon: "{{ $status }}",
            });
        </script>
        @endif
    @endforeach
    
  @stack('localscript')


</body>

</html>