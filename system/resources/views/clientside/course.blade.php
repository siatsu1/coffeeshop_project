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
				<li><a href="{{url('best')}}"><b>Best Menu</b></a></li>
					<li><a href="{{url('about')}}" ><b>About</b></a></li>
					<li><a href="{{url('course')}}" class="active"><b>Course</b></a></li>
					<li><a href="{{url('login')}}"><b>Login</b></a></li>	
				</ul>				
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>

		</nav>
		<h1>Our Courses</h1>
	</section>

<!------Course-------->
<section class="course">
	<img src="{{url('public/app')}}\images\knowledge.png" class="icon-course" alt="">
	<h1 style="color: black;">Course We Offer</h1>
	<p>We offer you the opportunity to learn specialty coffee's <br> minimum standards as well as getting down to the heart of the matter.</p>

	<div class="row">
		<div class="course-col">
			<h3>Intermediate</h3>
			<p>This coffee looks beautiful and is surprisingly not very difficult to make it! Using some basic technique foam with some milk and that make the latte coffe better, this coffee will look beautiful in any cup!</p>
		</div>
		<div class="course-col">
			<h3>Digree</h3>
			<p>We host courses covering everything from simple home brewing techniques to advanced latte art to allow you to learn the essential life skill of how to make truly great coffee.</p>
		</div>
		<div class="course-col">
			<h3>Post Graduation</h3>
			<p>Coffee Excellence Center, the CAS in Coffee Excellence is a hybrid e-learning course designed to provide coffee professionals with a multidisciplinary overview of applied sciences within the academic world of specialty coffee.</p>
		</div>
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