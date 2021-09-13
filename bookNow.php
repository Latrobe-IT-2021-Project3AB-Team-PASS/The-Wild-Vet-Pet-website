<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<title>BOOK NOW|The Wild Vet</title>
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
		<h1>BOOK NOW</h1>

		<table align="center">

			<tr>
				<td><h2>HEALTH CHECK</h2></td>
				<td><p>30 min<br>Pricing FROM:$75</p></td>
				<td><a1 href="#">BOOK NOW</a1></td>
			</tr>
			<tr>
				<td><h2>VACCINATIONS</h2></td>
				<td><p>20 min<br>Pricing FROM:$85</p></td>
				<td><a1 href="#">BOOK NOW</a1></td>
			</tr>
			<tr>
				<td><h2>SURGERY</h2></td>
				<td><p>1 hr 30 min<br>Pricing FROM:$200</p></td>
				<td><a1 href="#">BOOK NOW</a1></td>
			</tr>
			<tr>
				<td><h2>MICROCHIPPING</h2></td>
				<td><p>50 min<br>Pricing FROM:$150</p></td>
				<td><a1 href="#">BOOK NOW</a1></td>
			</tr>
			<tr>
				<td><h2>HOSPITALIZATION</h2></td>
				<td><p>60 min<br>Pricing FROM:$50</p></td>
				<td><a1 href="#">BOOK NOW</a1></td>
			</tr>
			<tr>
				<td><h2>PARASITE PREVENTION</h2></td>
				<td><p>60 min<br>Pricing FROM:$30</p></td>
				<td><a1 href="#">BOOK NOW</a1></td>
			</tr>
		</table>
	</body>
