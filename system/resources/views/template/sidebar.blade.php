 <aside class="sidebar-wrapper" data-simplebar="true">
   <div class="sidebar-header">
     <div >
       <img src="{{ url('public') }}/app/images/coffee-beans.png" class="logo-icon " alt="logo icon">
     </div>
     <div>
       <p class="logo-text" style="font-size: 15px">COFFEE</p>
     </div>
     <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
     </div>
   </div>

 
   <ul class="metismenu" id="menu">
     <li class="{{checkRouteActive('admin/beranda')}}">
       <a href="{{ url('admin/beranda') }}">
         <div class="parent-icon"><i class="fadeIn animated bx bx-unite"></i>
         </div>
         <div class="menu-title">Beranda</div>
       </a>
     </li>
     <li class="{{checkRouteActive('admin/produk')}}{{checkRouteActive('admin/produk/create')}}">
       <a href="{{ url('admin/produk') }}">
         <div class="parent-icon"><i class="fadeIn animated bx bx-unite"></i>
         </div>
         <div class="menu-title">Produk</div>
       </a>
     </li>

   </ul>
  



   </ul>
  
 </aside>