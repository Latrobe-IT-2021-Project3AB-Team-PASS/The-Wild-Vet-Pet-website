<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>HOME|The Wild Vet</title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	</head>
	<header>
		<nav>
			<a href="home.php"><label class="logo">THE WILD VET</label></a>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="ourServices.php">OUR SERVICES</a></li>
				<li><a href="aboutOurClinic.php">ABOUT OUR CLINIC</a></li>
				<li><a href="contactUs.php">CONTACT US</a></li>
				<li><a href="bookNow.php">BOOK NOW</a></li>
				<?php
					if (isset($_SERVER["useruid"])) {
						echo "<li><a href='myAccount.php'>MY ACCOUNT</a></li>";
						echo "<li><a href='logout.inc.php'>LOG OUT</a></li>";
					}
					else{
						echo "<li><a href='signUp.php'>SIGN UP</a></li>";
						echo "<li><a href='logIn.php'php>LOG IN</a></li>";
					}
				?> 
			</ul>
		</nav>
	</header>
	<body>
		<h1>HOME</h1>
		<h2>ONE VET<br>FOR<br>ALL PETS</h2>
	    <div class="slidershow middle">

	      <div class="slides">
	        <input type="radio" name="r" id="r1" checked>
	        <input type="radio" name="r" id="r2">
	        <input type="radio" name="r" id="r3">

	        <div class="slide s1">
	          	<img src="images/1.jpg" alt="">
	        </div>
	        <div class="slide">
	          	<img src="images/2.jpg" alt="">
	        </div>
	        <div class="slide">
	          	<img src="images/3.jpg" alt="">
	        </div>
	      </div>

	      <div class="navigation">
	        <label for="r1" class="bar"></label>
	        <label for="r2" class="bar"></label>
	        <label for="r3" class="bar"></label>

      </div>
    </div>
