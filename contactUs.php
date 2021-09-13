<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<title>CONTACT US|The Wild Vet</title>
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
		<h1>CONTACT US</h1>
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
				<h2>OPENING HOURS</h2>
				<p>8:00 AM - 7:00 PM Monday - Friday</p>
				<p>9:00 AM - 5:00 PM Saturday</p>
				<p>9:00 AM - 12:00 PM Sunday</p>
				<h2>OUR ADDRESS</h2>
				<p>22a Bridge Road, Glebe NSW 2037</p>
				<p>Email: reception@thewildvet.com.au</p>
				<p>Tel: 1300 WILD VET (1300 9453 838)</p>

		</div>

			</section>
			<section class="child">
				
				
				<h2>OUR LOCATION</h2>
				<p style="text-align: left;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.4965837718087!2d151.18613291571668!3d-33.876862526909754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae2cdd500001%3A0x673f2aee511f4b5d!2s22a%20Bridge%20Rd%2C%20Glebe%20NSW%202037!5e0!3m2!1sen!2sau!4v1628061881327!5m2!1sen!2sau" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
			</section>
		</section>
			
			
		</body>
