<?php 
session_start();
$user=$_SESSION['user'];
if(isset($_SESSION['user']))
{
	?>
	<html lang="en">
	<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>

	.mySlides img{ 
	top:0px;
		width:100%; 
		height:65vh;
		position:absolute; 
		animation:30s fade ease infinite; 
		z-index:-1;
		} 
		
	.mySlides img:nth-of-type(1){animation-delay:9s;} 
	.mySlides img:nth-of-type(2){animation-delay:12s;}
	.mySlides img:nth-of-type(3){animation-delay:8s;}
	.mySlides img:nth-of-type(4){animation-delay:3s;} 
	.mySlides img:nth-of-type(5){animation-delay:0s;} 


	@keyframes fade{ 
		0%{opacity:1;}17%{opacity:1;}25%{opacity:0;}92%{opacity:0;}100%{opacity:1;} 
	}

	.li1
	{
	right:0%;
	}

	.image{
		top:400px;
		left:30px;
		position:relative;
		float:left;
		width:100%;
		display:block;
	}
	img{
		position:relative;
		width:250px;
		height:250px;
		margin:20px;
	}
	</style>
	</head>
	<body>

	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="#">CHRIS HOLIDAYS</a>
		</div>
		<ul class="nav navbar-nav">
		<li class="active"><a href="#">Home</a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> HOTELS <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="https://www.applebees.com/en/menu">APPLE BEE </a></li>
			<li><a href=""> UPPER DECK </a></li>
			<li><a href="#"> HOT DOG MEALS </a></li>
			</ul>
		</li>
		<li><a href="bookingform.html "> BOOKING  FORM </a></li>
		<li><a href="slideshow.html"> GALLERY </a></li>
		<li><a href="pckges.html"> PACKAGES  </a></li>
		</ul>
		<form class="navbar-form navbar-left" action="/action_page.php">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search" name="search">
		</div>
		</form>
		</ul>
		<ul class="nav navbar-nav">
			<li class="li1"><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $user; ?></a></li>
			<li><a href="logout.php" name='logout'>Logout</a></li>
		</ul>
	</div>
	</nav>

	
		<div class="mySlides">
			
			<img src ="images/goa.jpg">
			<img src ="images/12.JPG">
			<img src ="images/10.jpg">
			<img src ="images/pat.jpg">
			<img src ="images/14.jpg">
			
			
		</div>

		<!-- --------------------------------------------------------------- -->
		
		<div class="image">
		<img src=images/PK.jpg />
		<img src=images/PS.jpg />
		<img src=images/PP.jpg />
		<img src=images/PL.jpg />
		</div>


	</body>
	</html>
	<?php
}
else{
	header("location:index.html");
}
?>
