<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Barista Coffee Website Design</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="{{url('public')}}/app/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
</head>
<style>
	.img-course {
	position: relative;
	width: 70px !important;
	height: auto;
	background: white;
	margin-top: -80px ;
	padding: 20px;
	border-radius: 35px;
}

</style>
<body>
	
	<section class="sub-header">
		<div class="layer-about"></div>
		<nav>
			<a href="index.html" class="title"><b>Coffee Original Taste</b></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hidenMenu()"></i>
				<ul>
				<li><a href="{{url('/')}}" ><b>Home</b></a></li>
				<li><a href="{{url('best')}}" class="active"><b>Best Menu</b></a></li>
					<li><a href="{{url('about')}}" ><b>About</b></a></li>
					<li><a href="{{url('course')}}" ><b>Course</b></a></li>
					<li><a href="{{url('login')}}"><b>Login</b></a></li>	
				</ul>				
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>

		</nav>
		<h1>Best Coffee</h1>
	</section>

<!------Menu Page-------->
<section class="menu-content">
	<div class="card">
		<h1 style="font-weight: 200;">Best Coffee</h1>
		<span class="garis"></span>
		<h5 style="font-weight: 200; font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem sequi distinctio facilis, corrupti ipsa dignissimos fuga dolore, nobis corporis repudiandae, placeat molestiae tempore in nemo possimus nihil nulla mollitia.</h5>
	</div>
	<div class="row-espresso">

		@foreach($produk as $data)
		<div class="menu-espresso">
			<img src="{{url('public/app/produk')}}\{{$data->foto}}" class="img-fluid mb-3" alt="" />

			<h2 style="text-transform: capitalize; margin:2px 0 0 0;"> {{$data->nama}} </h2>
			<h2 style="margin:0; font-weight: normal;;">Rp. {{number_format($data->harga)}}</h2>
			<p>{{$data->deskripsi}}</p>
		</div>
		@endforeach

		
	</div>
	

</section>

<!-- about -->
<section class="about">
	<h4>About Us</h4>
	<p>Coffee Original Taste is Asia's premier coffee academy. We offer professional certification courses <br> that are internationally recognised to coffee hobbyists, industry specialists and everyone in between.</p>
	
	<div class="container-mitra">
		<div class="row-mitra">
			<div class="isi-mitra">
				<h1 style="color: white;">Business <br> Partners</h1>
			</div>
			<div class="isi-mitra">
				<img src="{{url('public/app')}}\images\mitra\1.png" class="mitra-logo" alt="">
				<h4>Janji Jiwa</h4>
			</div>
			<div class="isi-mitra">
				<img src="{{url('public/app')}}\images\mitra\2.jpg" class="mitra-logo" alt="">
				<h4>Lokale</h4>
			</div>
			<div class="isi-mitra">
				<img src="{{url('public/app')}}\images\mitra\3.png" class="mitra-logo" alt="">
				<h4>Kopi Setje</h4>
			</div>
			<div class="isi-mitra">
				<img src="{{url('public/app')}}\images\mitra\4.png" class="mitra-logo" alt="">
				<h4>starbucks</h4>
			</div>
			<div class="isi-mitra">
				<img src="{{url('public/app')}}\images\mitra\5.png" class="mitra-logo" alt="">
				<h4>Aming Coffee</h4>
			</div>
		</div>
	</div><br><br>
<!------Footer-------->
	<section class="footer">
		<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-linkedin"></i>
		</div>
		<p >Made with <i class="fa fa-heart-o" ></i> byKelompok</p>
	</section>
</section>

<!-----JavaScript for Toggle Menu---->
<script>
	var navLinks = document.getElementById("navLinks");
	function showMenu() {
		navLinks.style.right ="0";
	}
	function hidenMenu() {
		navLinks.style.right ="-200px";
	}
</script>
</body>
</html>