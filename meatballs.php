<?php
session_start();


$_SESSION["currentPage"] = 'meatballs.php';
$_SESSION["commentFile"] = 'meatballComments.txt';

?>
<!DOCTYPE html>
<html>
<head>
	<title>MeatballPage</title>
	<link href="reset.css" rel="stylesheet" type="text/css">
	<link href="website.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="menu_bar">
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="calendar.php">Calendar</a></li>
  <li class="dropdown">
    <a id="active" href="javascript:void(0)" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="pancakes.php">Pancakes</a>
      <a id="active2" href="meatballs.php">Meatballs</a>
    </div>
  </li>
              <?php
	      if($_SESSION["user"] !== null){
	      	echo "<li id='logout'><a href='logout.php'>Log out</a></li>
	      	<li id='user'>Logged in as: {$_SESSION['user']}</li>";
	      	}
	      else{
	      echo "<li id='login'><a href='login.html'>Log in</a></li>";
	      echo $_SESSION["user"] . "ugug";
	      }
	?>
</ul>
</div>
<div class="grid12-6">



<div class="inner_box_recipe">
	<h1>Meatballs</h1>
	<img src="Resources/meatballs2.jpg" alt="Image of Meatballs">
	<div class="text">

	<h2>Ingredients:</h2>
		<ul>
		   <li>1 lb lean (at least 80%) ground beef</li>
		   <li>1/2 cup bread crumbs</li>
		   <li>1/4 cup milk</li>
		   <li>1/2 teaspoon salt</li>
		   <li>1/2 teaspoon Worcestershire sauce</li>
		   <li>1/4 teaspoon pepper</li>
		   <li>1 small onion, finely chopped</li>
		   <li>1 egg</li>
		</ul>
	</div>
	<h3><br>Directions:</h3>
	<ul>
		<li>Heat oven to 400F. Line 13x9-inch pan with foil; spray with cooking spray.</li>
		<li>In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.</li>
		<li>Bake uncovered 18 to 22 minutes or until no longer pink in center. </li>
	</ul>


<?php
    include 'commentField.php';
    ?>

</div>

</div>

</body></html>