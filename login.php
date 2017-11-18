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
  <li><a href="calendar.php">Calendar</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="pancakes.php">Pancakes</a>
      <a href="meatballs.php">Meatballs</a>
    </div>
  </li>



			    <?php
				$readFromFile = fopen("users.txt", "r") or die("Unable to open file!");
				$username = $_GET["username"];
				$password = $_GET["password"];

				while(!feof($readFromFile)) {

					if(trim(fgets($readFromFile)) === $username) {


						if(trim(fgets($readFromFile)) === $password) {
							$_SESSION["user"] = $username;
							echo "<li id='logout'><a href='logout.php'>Log out</a></li>
    						<li id='user'>Logged in as: {$_SESSION['user']}</li></ul></div><div class='grid12-6'><div class='inner_box2'>";
							echo "<div class='youAreLoggedIn'><h4>Welcome {$_SESSION['user']}, <br>you are logged in!</h4>
							<h5><br>You can now comment our recipes.<br>Please go on to our <a href='calendar.php'>calendar</a> and get inspired!</h5></div>";

							break;

						}
						echo "<li id='login'><a id='active' href='login.html'>Log in</a></li></ul></div><div class='grid12-6'><div class='inner_box2'>";
							echo "<div class='logIn'>
								<h2>Log in</h2>
								<form action='login.php' method='get'>
											<div class='nickName'>
											<label for='username'>Your user name:<br></label>
									    	<input type='text' name='username' class='text-author'/ placeholder='Write your user name here'>
									    	</div>
									    	<div class='password'>
									    	<label for='password'>Your password:<br></label>
											<input type='password' name='password' class='text-author'/ placeholder='Write your password here'>
									    	</div>

									    	<div class='submit'>
									    	<input type='submit' value='Log in'>
									    	<input type='reset' value='Cancel'>
									    	</div>


			    </form>";
						echo "<h5>Wrong password, try again.</h5>";
						echo "<h3>If you don't have an log in you can register for one <a href='register.html'>here</a>.</h3>";
						break;

					}
					fgets($readFromFile);
					fgets($readFromFile);
}
if(fgets($readFromFile) ===  false) {
	echo "<li id='login'><a id='active' href='login.html'>Log in</a></li></ul></div><div class='grid12-6'><div class='inner_box2'>";
	echo "<div class='logIn'>
								<h2>Log in</h2>
								<form action='login.php' method='get'>
											<div class='nickName'>
											<label for='username'>Your user name:<br></label>
									    	<input type='text' name='username' class='text-author'/ placeholder='Write your user name here'>
									    	</div>
									    	<div class='password'>
									    	<label for='password'>Your password:<br></label>
											<input type='password' name='password' class='text-author'/ placeholder='Write your password here'>
									    	</div>

									    	<div class='submit'>
									    	<input type='submit' value='Log in'>
									    	<input type='reset' value='Cancel'>
									    	</div>


			    </form>";

	echo "<h5>Sorry we do not have that username registered. <br>Try another username!</h5>";
	echo "<h3>If you don't have an log in you can register for one <a href='register.html'>here</a>.</h3>";
	}

fclose($readFromFile);
?>

</div>
</div>
</div>
</body>
</html>