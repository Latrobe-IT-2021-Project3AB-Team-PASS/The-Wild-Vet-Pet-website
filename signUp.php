<?php
	session_start();
?>

	<head>
		<meta charset="utf-8">
		<title>SIGN UP|The Wild Vet</title>
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
	<section class="signup-form">
		<h1>SIGN UP</h1>
		<div class="signup-form-form">
		<form action="signup.inc.php" method="post">
			<input type="text" name="name" placeholder="Full name">
			<input type="text" name="email" placeholder="Email...">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwdrepeat" placeholder="Repeat password">
			<button type="submit" name="submit" >Sign Up</button>
		</form>
		</div>
<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";

		}
		else if ($_GET["error"] == "invaliduid") {
			echo "<p>Choose a proper username!</p>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<p>Choose a proper email!</p>";
		}	
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<p>Passwords doesn't match!</p>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<p>Something went wrong, try again!</p>";
		}
		else if ($_GET["error"] == "usernametaken") {
			echo "<p>SUsername already taken!</p>";
		}
		else if ($_GET["error"] == "none") {
			echo "<p>You have signed up!</p>";
		}
	}
?>
	</section>
	<section>
		<h2>Sign up with us now! :)</h2>

	</section>


