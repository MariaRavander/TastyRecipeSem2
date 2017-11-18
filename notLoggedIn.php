<?php
	session_start();
?>

<html>
<head>
	<title>Register</title>
	<link href="reset.css" rel="stylesheet" type="text/css">
	<link href="website.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu_bar">
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="calendar.html">Calendar</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="pancakes.php">Pancakes</a>
      <a href="meatballs.php">Meatballs</a>
    </div>
  </li>
    <li id="login"><a href="login.html">Log in</a></li>
</ul>
</div>

<div class="grid12-6">

<div class="inner_box2">
	<div class="register">
		<h2>Sorry, you need to be logged in to write comments.</h2>
		<h4>Go to <a href="login.html">login</a> to log in or register. Or return to the previous page <?php echo "<a href='" . $_SESSION["currentPage"] . "'>"; ?>here</a>.</h4>



</div>
</div>
</div>
</body>
</html>

