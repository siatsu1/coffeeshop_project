<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Barista Coffee Website Design</title>
    <link rel="stylesheet" href="{{url('public/app')}}/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        
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
    
    <section class="header">
        
        <nav>
            <a href="index.html" class="title"><b>Coffee Original Taste</b></a>
            <div class="nav-links" id="navLinks">
                <!-- <i class="fa fa-times" onclick="hidenMenu()"></i> -->
                <ul>
                <li><a href="{{url('/')}}" ><b>Home</b></a></li>
                <li><a href="{{url('best')}}"><b>Best Menu</b></a></li>
					<li><a href="{{url('about')}}"><b>About</b></a></li>
					<li><a href="{{url('course')}}"><b>Course</b></a></li>
					<li><a href="{{url('login')}}" class="active"><b>Login</b></a></li>	
                    <!-- <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;"></button></li>               -->
                </ul>               
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>
            <div class="content">       
                <div id='login-form'class='login-page'>
                    <div class="form-box">
                        <div class='button-box'>
                            <div id='btn'></div>
                            <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                            <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                        </div>
                        <form id='login' class='input-group-login'>
                            <input type='text'class='input-field'placeholder='Email Id' required >
                            <div class="password">
                                <input type='password' id="password"class='input-field'placeholder='Enter Password' required>
                                <button type="button" id="show-pass" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></button>
                                <!-- <input  type="button" id="show-pass" value='show'> -->
                                <a href="{{url('admin/beranda')}}" class="btn btn-secondary">Login</a>
                            </div>
                            
                            <input type='checkbox'class='check-box'><span>Remember Password</span>
                            <!-- <button type='submit'class='submit-btn'><b>Log in</b></button> -->
                        </form>
                        <form id='register' class='input-group-register'>
                            <input type='text'class='input-field'placeholder='First Name' required>
                            <input type='text'class='input-field'placeholder='Last Name ' required>
                            <input type='email'class='input-field'placeholder='Email Id' required>
                            <input type='password'class='input-field'placeholder='Enter Password' required>
                            <input type='password'class='input-field'placeholder='Confirm Password'  required>
                            <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                            <button type='submit'class='submit-btn'>Register</button>
                        </form>
                    </div>
                </div>
            </div>

    </section>
<!-----JavaScript for Toggle Menu---->
<script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right ="0";
    }
    function hidenMenu() {
        navLinks.style.right ="-200px";
    }

    document.querySelector('#show-pass').onclick = () => { 
        let type = document.querySelector('#password').type;
        if(type == 'password'){
            document.querySelector('#password').type = 'text';
            document.querySelector('#show-pass').value = 'Hide';
        }else{
            
            document.querySelector('#password').type = 'password';
            document.querySelector('#show-pass').value = 'show';
        }
        };

        document.querySelector('#login > button').onclick =  Swal.fire(
  'Login!',
  'Anda Berhasil Login!',
  'success'
);
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>