
<?php
//Old Session Deleting when landing page started
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<title>
		KeePen
	</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<link rel="icon" href="icon.png" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/landing.js"></script>

</head>

<body>

<!-- Header with logo and hero Bg -->
<header class="header">

<div class="container">
<div class="row" style="margin-top:40px;">
	<div class="col-lg-2">
		<center>
			<a href="">
				<span class="nav-icon" id="openMenu"><i class="fa fa-low-vision"> Kee<span style="color:white;">Pen</span></i></span>
			</a>
		</center>
	</div>

	<div class="col-lg-10"></div>

	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<center>
			<h1 class="mynote">
				KEEP<br> ME WITH YOU !<br>
			</h1>

			<h3 class="quotes">
				"I write for the same reason I breath- because if i didn't, I would die."
			</h3>
		</center>
	</div>

	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<center>
			<br>
			<a href="#openLogin"><button type="button" name="loginButton" class="loginButton animated slideInUp" value="Login">Login</button></a>
			<button type="button" name="signinButton" class="signinButton animated slideInUp" value="Signup">Signup</button>
		</center>
	</div>

</div>
</div>

</header>
<!-- Header Ends -->

<!-- Display None Elements will declare when require -->
<!-- Login Tab -->
<div class="login_over animated tada">
	<div class="login" style="display:none;">
		<div class="container">
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-2 col-sm-10 col-md-2 col-xs-10">
					<center>
					<a href="">
						<span class="nav-icon animated bounceInDown" id="logoLogin" style="color:#153932;display:none;"><i class="fa fa-low-vision"> Kee<span style="color:white;">Pen</span></i></span>
					</a>
					</center>
				</div>

				<div class="col-lg-9 col-md-9"></div>

				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
					<div class="closeMe animated fadeIn">
						<a href="">X</a>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<center>
						<div class="loginTab animated bounceInUp" id="loginTab">
							<br>
							<h1 class="loginHeading">KeePen Login</h1>
							<form action="controllers/login.php" method="post">
								<input type="text" name="username" id="Loginusername" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g,'');" class="loginText" placeholder="Your Pen Name" maxlength="20">
								<input type="password" name="pwd" class="loginText" placeholder="Your Pen Password" maxlength="20">
								<input type="submit" name="loginSubmit" class="loginSubmit" Value="Get Me There">
								
							</form>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login Tab Ends -->

<!-- Sign Up Tab -->
<div class="signin_over animated tada">
	<div class="signin" style="display:none;">
		<div class="container">
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-2 col-sm-10 col-md-2 col-xs-10">
					<center>
					<a href="">
						<span class="nav-icon animated bounceInDown" id="logoSignin" style="color:#153932;display:none;"><i class="fa fa-low-vision"> Kee<span style="color:white;">Pen</span></i></span>
					</a>
					</center>
				</div>

				<div class="col-lg-9 col-md-9"></div>

				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
					<div class="closeMe animated fadeIn">
						<a href="">X</a>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<center>
						<div class="signinTab animated bounceInUp" id="loginTab">
							<br>
							<h1 class="loginHeading">KeePen Signup</h1>
							<form action="controllers/reg.php" method="post">
								<input type="text" name="fullname" id="Signfullname" onkeyup="this.value=this.value.replace(/[^a-zA-Z\s]/g,'');" class="loginText" placeholder="Full Name" maxlength="20">

								<input type="email" name="email" id="Signemail" class="loginText" placeholder="Email Id" maxlength="50">

								<input type="text" id="Signusername" name="username" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g,'');" class="loginText" placeholder="Pen Name" maxlength="20">

								<input type="password" id="Signpwd" name="pwd" class="loginText" placeholder="Pen Password" maxlength="20">
								<input type="submit" name="loginSubmit" class="loginSubmit signinBut" Value="Let's Start">
							</form>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Signup Tab Ends -->
<!-- Display None Elements Ends -->

</body>
</html>

