<?php
	session_start();
?>

	<head>
		<meta charset="utf-8">
		<title>ABOUT OUR CLINIC|The Wild Vet</title>
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
						echo "<li><a href='logIn.php'>LOG IN</a></li>";
					}
				?> 
			</ul>
		</nav>
	</header>
	<body>
		<h1>ABOUT OUR CLINIC</h1>
		<p style="text-align: center;">
			Here at The Wild Vet your pets are part of our family. You will be looked after by our qualified veterinary and nursing team who have extensive experience with all species – come and meet the team.
			<br>In addition to dogs and cats, we have a special focus on birds, >rabbits, reptiles, rodents, and other pocket pets (see the species we treat).</br>
			<br>At the Wild Vet we work with state of the art diagnostic, laboratory, surgical and clinical settings to provide the highest standard of care for your pet. </br>
			<br>Whenever possible your pet will see their regular vet that knows them best, and our priority is to have frequent and open communication while your pet is with us.</br>
			<img src="images/logo.png" alt="">
		</p>
	</body
