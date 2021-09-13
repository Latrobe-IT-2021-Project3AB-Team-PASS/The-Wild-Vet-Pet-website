<?php
  session_start();
?>
  
  <head>
    <meta charset="utf-8">
    <title>LOG IN|The Wild Vet</title>
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
    <h1>LOG IN</h1>
    <div class="signup-form-form">
    <form action="login.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username/Email">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit" >Log In</button>
    </form>
    </div>
<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
    echo "<p>Fill in all fields!</p>";

    }
    else if ($_GET["error"] == "wronglogin") {
      echo "<p>Incorrect login!</p>";
    }
  }
?>
  </section>
