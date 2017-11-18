<?php
session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>LogOut</title>
	<link href="reset.css" rel="stylesheet" type="text/css">
	<link href="website.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu_bar">
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="calendar.php">Calendar</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="pancakes.php">Pancakes</a>
      <a href="meatballs.php">Meatballs</a>
    </div>
  </li>

    <li id="login"><a id="active" href="login.html">Log in</a></li>

</ul>
</div>

<div class="grid12-6">

<div class="inner_box2">
	<?php
	echo "<div class='logOut'><h2>You are now logged out.</h2><h3>See you again soon!</h3>"
	?>

</div>
</div>
</div>
</body>
</html>