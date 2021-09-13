<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<title>OUR SERVICES|The Wild Vet</title>
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
			<h1>OUR SERVICES</h1>
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
			<h2>> HEALTH CHECKS</h2>
			<p>In addition to a thorough physical examination, during every health check, we will review all aspects of your pet’s health.</p>

			<h2>> VACCINATIONS</h2>
			<p>To prevent a number of deadly diseases in pet dogs and cats, multiple vaccines are routinely recommended.</p>

			<h2>> SURGERY</h2>
			<p>Our theatre suite has undergone renovations to cater for all necessary surgical procedures.</p>

			<h2>> MICROCHIPPING</h2>
			<p>Avoid the risk of losing your loved one by ensuring that they are microchipped early.</p>


		</div>

			</section>
			<section class="child">
	
			<h2>> HOSPITALIZATION</h2>
			<p>If your pet needs some time to rest and recuperate, our hospital facilities boast the latest technologies in a comfortable setting.</p>

			<h2>> MEDICINE</h2>
			<p>Medications for most conditions is kept in stock, and if we have to order it in, we can post the medication to your home free of charge.</p>

			<h2>> PARASITE PREVENTION</h2>
			<p>We stock a selection of parasite prevention products, all at reasonable prices.</p>

			<h2>> PET STORE</h2>
			<p>We stock a wide variety of health products, supplements, food and toys for your pet.</p>

			</section>
		</section>

		</body>
