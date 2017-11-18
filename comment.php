<?php
	session_start();

$readFromFile = fopen($_SESSION["commentFile"], "a") or die("Unable to open file!");
				$user = $_SESSION["user"];
				$comment = $_GET["comment"];

    if(filesize($_SESSION["commentFile"]) == 0) {
        $txt = $user;
        fwrite($readFromFile, $txt);
    }
    else {
        $txt = PHP_EOL . $user;
	    fwrite($readFromFile, $txt);
    }
	$txt = PHP_EOL . $comment;
	fwrite($readFromFile, $txt);
    $txt = PHP_EOL . date("Y-m-d-h-i-s-a", time());
    fwrite($readFromFile, $txt);

fclose($readFromFile);

include $_SESSION["currentPage"];

?>