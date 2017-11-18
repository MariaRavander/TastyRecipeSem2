<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link href="reset.css" rel="stylesheet" type="text/css">
	<link href="website.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="menu_bar">
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a id="active" href="calendar.php">Calendar</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="pancakes.php">Pancakes</a>
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
	        echo $_SESSION["user"] . "ugug";
	        }
	?>
</ul>
</div>



<div class="grid12-6">

<div class="calendar_box">
	<h1>November</h1>
	<div class="calendar">
	<h2 id="v1">Mon</h2>
	<h2 id="v2">Tue</h2>
	<h2 id="v3">Wed</h2>
	<h2 id="v4">Thu</h2>
	<h2 id="v5">Fri</h2>
	<h2 id="v6">Sat</h2>
	<h2 id="v7">Sun</h2>
	<div id="d1"> </div>
	<div id="d2"> </div>
	<div id="d3"><p>1</p></div>
	<div id="d4"><p>2</p></div>
	<div id="d5"><p>3</p></div>
	<div id="d6" style="background-image: url(Resources/pancakesC.jpg)"><a href="pancakes.php">4</a></div>
	<div id="d7"><p>5</p></div>
	<div id="d8"><p>6</p></div>
	<div id="d9"><p>7</p></div>
	<div id="d10"><p>8</p></div>
	<div id="d11"><p>9</p></div>
	<div id="d12"><p>10</p></div>
	<div id="d13"><p>11</p></div>
	<div id="d14"><p>12</p></div>
	<div id="d15"><p>13</p></div>
	<div id="d16"><p>14</p></div>
	<div id="d17"><p>15</p></div>
	<div id="d18"><p>16</p></div>
	<div id="d19"><p>17</p></div>
	<div id="d20"><p>18</p></div>
	<div id="d21"><p>19</p></div>
	<div id="d22"><p>20</p></div>
	<div id="d23" style="background-image: url(Resources/meatballsC.jpg)"><a href="meatballs.php">21</a></div>
	<div id="d24"><p>22</p></div>
	<div id="d25"><p>23</p></div>
	<div id="d26"><p>24</p></div>
	<div id="d27"><p>25</p></div>
	<div id="d28"><p>26</p></div>
	<div id="d29"><p>27</p></div>
	<div id="d30"><p>28</p></div>
	<div id="d31"><p>29</p></div>
	<div id="d32"><p>30</p></div>
	<div id="d33"><p> </p></div>
	<div id="d34"><p> </p></div>
	<div id="d35"><p> </p></div>
	</div>

</div>

</div>

</body></html>