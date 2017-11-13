<?php
	session_start();
?>
<html>
<head>
	<title>LogIn</title>
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
      <a href="pancakes.html">Pancakes</a>
      <a href="meatballs.html">Meatballs</a>
    </div>
  </li>
    <li id="login"><a id="active" href="login.html">Log in</a></li>
</ul>
</div>

<div class="grid12-6">

<div class="inner_box2">
	<div class="logIn">
		<h2>Log in</h2>
		<form action="login.php" method="get">
					<div class="nickName">
					<label for="username">Your user name:<br></label>
			    	<input type="text" name="username" class='text-author'/ placeholder="Write your user name here">
			    	</div>
			    	<div class="password">
			    	<label for="password">Your password:<br></label>
					<input type="password" name="password" class='text-author'/ placeholder="Write your password here">
			    	</div>

			    	<div class="submit">
			    	<input type="submit" value="Log in">
			    	<input type="submit" formaction="login.html" value="Cancel">
			    	</div>


			    </form>

			    <?php
				$readFromFile = fopen("users.txt", "r") or die("Unable to open file!");
				$username = $_GET["username"];
				$password = $_GET["password"];

				while(!feof($readFromFile)) {

					if(trim(fgets($readFromFile)) === $username) {


						if(trim(fgets($readFromFile)) === $password) {
							$_SESSION["user"] = $username;
							echo "<h4>Welcome {$_SESSION['user']}, <br>you are logged in!</h4>";
							echo "You can now comment our recipes.<br>Please go on to our <a href='calendar.html'>calendar</a> and get inspired!";

							break;

						}

						echo "<h5>Wrong password, try again.</h5>";
						echo "<h3>If you don't have an log in you can register for one <a href='register.html'>here</a></h3>";
						break;

					}
					fgets($readFromFile);
					fgets($readFromFile);
}
if(fgets($readFromFile) ===  false) {
	echo "<h5>Sorry we do not have that username registered. <br>Try another username!</h5>";
	echo "<h3>If you don't have an log in you can register for one <a href='register.html'>here</a></h3>";
	}

fclose($readFromFile);
?>

</div>
</div>
</div>
</body>
</html>