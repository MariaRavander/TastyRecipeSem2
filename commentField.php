
<div class="comment">
	<h2>Please leave a comment!</h2>
    <p>(You need to be logged in to leave a comment.)</p>


<?php
if(isset($_SESSION["user"])) {
	echo "<form action='comment.php' method='get'>";
	}

else
	echo "<form action='notLoggedIn.php' method='get'>";
	?>

    	<div class="textarea">
    	<textarea id= "entry" name="comment" rows = 5 placeholder="Write your comment here."></textarea>
    	</div>
    	<div class="submit">
    	<input type="submit" value="Send">
    	</div>


    </form>
  
    <h2>Comments:</h2>
    <?php
    $readFromFile = fopen($_SESSION["commentFile"], "r") or die("Unable to open file!");
    while(!feof($readFromFile)) {
        echo "<form action='delet.php'>";
    	$user2 = fgets($readFromFile);
   		 echo "<h3>$user2<br></h3>";
   		 $comment = fgets($readFromFile);
   		 echo "<p>$comment<br><br></p>";
        if($_SESSION["user"] === trim($user2)) {
        $time = fgets($readFromFile); 
        echo "<input type='hidden' value='" . trim($time) . "' name='time'>";   
        echo "<div class='delet'>";    
        echo "<input type='submit' value='Delete' id='deletbutton'></div>";
        }
        else {
            fgets($readFromFile);
        
        }
        
        echo "</form>";
        
    }
    ?>


  