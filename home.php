
<?php
//checking if session is set or not
//otherwise redirect to landing page
session_start();
if(!isset($_SESSION['keepen_ace'])){
	header("location:index.php");
}

include('controllers/config.php');
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<link rel="icon" href="icon.png" />
	<link rel="stylesheet" href="css/home.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/home.js"></script>

</head>

<body onload="first_note()">

<!-- navbar starts -->
<nav class="homeNav">
	<div class="create col-lg-1 col-sm-1 col-md-1 col-xs-1">
		<i class="addNote fa fa-plus-circle">

		</i>
	</div>

	<div class="nav-icon" id="openMenu" style="float:right;margin-right:15px;margin-top:5px;">
		<i class="fa fa-low-vision"  style='margin-right:30px;'> Kee<span style="color:white;">Pen</span></i>
		<i onclick="power()" class="fa fa-power-off power"></i>
	</div>
</nav>
<!-- navbar ends -->

<!-- filter starts -->
<section class="filter">
<center>

		<div class="filter-wrapper">
		  <div class="btn-group">
		    <button class="btn btn-default filter-display" data-toggle="collapse" data-target="#filter-all" onclick="first_note()">All</button>
		  </div>
		</div>	

		<div class="filter-wrapper">
		  <div class="btn-group">
		    <button class="btn btn-default filter-display" data-toggle="collapse" data-target="#filter-color">Colours</button>
		  </div>
		  <div id="filter-color" class="collapse filter-card">
		    <div class="pull-left">
		        <div class="pull-right">
		      		<button class="btn btn-danger" data-toggle="collapse" data-target="#filter-color" onclick="color_filter(1)">Red</button>
		      		<button class="btn btn-success" data-toggle="collapse" data-target="#filter-color" onclick="color_filter(2)">Green</button>
		      		<button class="btn btn-warning" data-toggle="collapse" data-target="#filter-color" onclick="color_filter(3)">Yellow</button>
		      		<button class="btn btn-info" data-toggle="collapse" data-target="#filter-color" onclick="color_filter(4)">Indigo</button>		      		
		        </div>
		    </div>
		  </div>
		</div>

		<div class="filter-wrapper">
		  <div class="btn-group">
		    <button class="btn btn-default filter-display" data-toggle="collapse" data-target="#filter-type">Type</button>
		  </div>
		  <div id="filter-type" class="collapse filter-card">
		    <div class="pull-left">
		        <div class="pull-right">
		      		<button class="btn btn-danger" data-toggle="collapse" data-target="#filter-type" onclick="type_filter(1)">Food</button>
		      		<button class="btn btn-success" data-toggle="collapse" data-target="#filter-type" onclick="type_filter(2)">Meeting</button>
		      		<button class="btn btn-warning" data-toggle="collapse" data-target="#filter-type" onclick="type_filter(3)">Office</button>
		      		<button class="btn btn-primary" data-toggle="collapse" data-target="#filter-type" onclick="type_filter(4)">Home</button>
		      		<button class="btn btn-info" data-toggle="collapse" data-target="#filter-type" onclick="type_filter(5)">Others</button>	      		
		        </div>
		    </div>
		  </div>
		</div>	

		<div class="filter-wrapper">
		  <div class="btn-group">
		    <button class="btn btn-default filter-display" data-toggle="collapse" data-target="#filter-fav" onclick="fav_filter(1)">Fav</button>
		  </div>
		</div>			

</center>
</section>
<!-- filter ends -->

<!-- 	notes land area
		with help of ajax -->
<div class="container">
	<div class="row" id="note_landing">

	</div>
</div>
<!-- note land area ends -->

<!-- display none elements -->
<!-- Create New Note Element -->
<div class="NewNote animated fadeIn">
	<div class="NewNoteRel">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<center>
						<div class="NewMain animated fadeInUpBig">
							<div class="NewBg">
								<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
									<input type="text" name="heading" class="NewHeading" id="NewHeading" placeholder="Heading" maxlength="13" value=""><br>
								</div>  
								<div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 saveNew">
									<i class="fa fa-floppy-o"></i>
								</div>

								<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
									<textarea name="content" class="NewContent" id="NewContent" placeholder="Write your note here. :)"></textarea>
								</div>
							</div>
							<div class="NewFooter">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:left;margin-top:10px;">
									<div class="category">CATEGORY</div>
									<select class="catSelect" id="catg">
										<option>Food</option>
										<option>Meeting</option>
										<option>Office</option>
										<option>Home</option>
										<option>Others</option>
									</select>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:right;margin-top:10px;">
									<div class="category">COLOUR</div>
									<select class="catSelect" id="colorNew">
										<option>Red</option>
										<option>Green</option>
										<option>Yellow</option>
										<option>Indigo</option>
									</select>
								</div>
							</div>
						</div>
					</center>	
				</div>
			</div>
		</div>
	</div>

	<div class="NewClose">
		X
	</div>
</div>
<!-- Create New Note Element Ends -->

<!-- Edit old Note Element -->
<div class="EditNote animated fadeIn">
	<div class="NewNoteRel">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<center>
						<div class="EditDupMain animated fadeInUpBig">
						
						</div>
					</center>	
				</div>
			</div>
		</div>
	</div>

	<div class="EditClose">
		X
	</div>
</div>
<!-- Edit Old Note Element Ends-->
<div class="neutral"></div>

<?php

try {
	//creating connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $host, $password);
   	
   	/* storing user id number */
   	$session_val = $_SESSION['keepen_ace'];
    $sql = "SELECT id from username where username='$session_val' limit 1" ;
    $query = $conn->query($sql);
	$final = $query->fetch();

	$id = $final['id'];


    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

<script type="text/javascript">
var id = "<?php echo $id; ?>";
</script>

</body>
</html>