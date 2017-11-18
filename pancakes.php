<?php
session_start();

$_SESSION["currentPage"] = 'pancakes.php';
$_SESSION["commentFile"] = 'pancakeComments.txt';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PancakePage</title>
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
      <a id="active2" href="pancakes.php">Pancakes</a>
      <a href="meatballs.php">Meatballs</a>
    </div>
  </li>
          <?php
      if($_SESSION["user"] !== null){
      	echo "<li id='logout'><a href='logout.php'>Log out</a></li>
      	<li id='user'>Logged in as: {$_SESSION['user']}</li>";
      	}
      else{
      echo "<li id='login'><a href='login.html'>Log in</a></li>";
      echo $_SESSION["user"];
      }
	?>

</ul>
</div>
<div class="grid12-6">





<div class="inner_box_recipe">
	<h1>Pancakes</h1>
	<img src="Resources/pancakes.jpg" alt="Image of Pancakes">
	<div class="text">

		<h2>Ingredients:</h2>
		<ul>
		   <li>1 egg</li>
		   <li>3/4 cup milk</li>
		   <li>2 tablespoons butter, melted</li>
		   <li>1 cup flour</li>
		   <li>1 tablespoon sugar</li>
		   <li>1 teaspoon baking powder</li>
		   <li>1/2 teaspoon salt</li>
		</ul>

	</div>
	<h3><br><br>Directions:</h3>
	<ul>
		<li>Beat egg until fluffy.</li>
		<li>Add milk and melted margarine.</li>
		<li>Add dry ingredients and mix well.</li>
		<li>Heat a heavy griddle or fry pan which is greased with a little butter on a paper towel.</li>
		<li>The pan is hot enough when a drop of water breaks into several smaller balls which 'dance' around the pan.</li>
		<li>Pour a small amount of batter (approx 1/4 cup) into pan and tip to spread out or spread with spoon.</li>
		<li>When bubbles appear on surface and begin to break, turn over and cook the other side.</li>
		</ul>

<?php
    include 'commentField.php';
    ?>

</div>
</div>



</body></html>