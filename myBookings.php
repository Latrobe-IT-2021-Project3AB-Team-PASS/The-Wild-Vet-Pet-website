<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<title>MY BOOKINGS|The Wild Vet</title>
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
		<h1>MY BOOKINGS</h1>
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
				<h2>Account Infomation</h2>
				<p>//Image
					<br>//User Name</p>
			 	<li><a align="left" href="myAccount.html">My Account</a></li>
			 	<br><li><a align="left" href="myBookings.php">My Bookings</a></li>
		</div>

			</section>
			<section class="child">
	
				<h2>Manage Your Bookings</h2>
					<p>View, change or cancel your booking and easy rebook
						<br>Time Zone: Australian Eastern Standard Time (GMT+10) 
					</p>
					<h2>Recently
						<p>
							You've got nothing booked at the moment.
							<li><a href="ourServices.php">>Check Out Our Services</a></li>
						</p>
					</h2>
					<h2>History
						<p>
							We’re looking forward to meeting you.
							<li><a href="ourServices.php">>Check Out Our Services</a></li>
						</p>
					</h2>
			</section>
		</section>
	</body>
