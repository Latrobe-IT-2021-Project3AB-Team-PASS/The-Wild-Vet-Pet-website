<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<title>MY ACCOUNT|The Wild Vet</title>
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
		<h1>MY ACCOUNT</h1>
		<style>
		*{
			box-sizing: border-box;
		}
			.child{
				border: 1px sold black;
				float: left;
				width: 50%;
			}
			.parent{
				display: flex;
			}
		</style>

		<section>
			<section class="child">
				<h2>My Account
					<p>Update & Edit the information you share with the community</p>
					<p><br>Login Email：</p>
					<p>//login email will be display here.</p>
					<p1>Your Login email can't be changed</p1>
				</h2>
			 	<li><a align="left" href="myAccount.php">My Account</a></li>
			 	<br><li><a align="left" href="myBookings.php">My Bookings</a></li>

		</div>

			</section>
			<section class="child">
				<h2>ACCOUNT SETTING</h2>
				<form id="form" class="topBefore">
		  			<input id="First Name" type="text" placeholder="FiRST NAME">
		  			<input id="Last Name" type="text" placeholder="Last NAME">
		  			<input id="email" type="text" placeholder="E-MAIL">
		  			<h2>Address</h2>
		  			<input id="street" type="text" placeholder="STREET"></input>
  					<input id="city" type="text" placeholder="CITY"></input>
  					<input id="zipcode" type="text" placeholder="ZIPCODE"></input>
  					<input id="country" type="text" placeholder="COUNTRY"></input>
  					<input id="submit" type="submit" value="UPDATE">
  				</form>

			</section>
		</section>
		</body>
