<?php
  include_once 'header.php';
?>
<link rel="stylesheet" href="CSS/formstyle.css">
<title>LOG IN</title>
<h1>LOG IN</h1>
<section class="signup-form">
    
  <div class="signup-form-form">
    <h2 style="text-align:center;">LOG IN HERE!</h2>
    <form action="login.inc.php" method="post" style="text-align: center;">
      <input type="text" name="uid" placeholder="Email">
      <br><input type="password" name="pwd" placeholder="Password">
      <br><button type="submit" name="submit" >Log In</button>
    </form>
   
  </div>
  
  <section style="text-align:center;">
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>!!PLEASE FILL IN ALL FIELDS!!</p>";

      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>!!INCORRECT LOG IN!!</p>";
      }
    }

  ?>
  </section>

</section>
