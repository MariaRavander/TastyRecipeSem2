<?php

session_start();




   $readFromFile = fopen($_SESSION["commentFile"], "r") or die("Unable to open file!");
    $temp = array();
    while(!feof($readFromFile)) {
                
        $user = trim(fgets($readFromFile));
        $comment = trim(fgets($readFromFile));
        $time = trim(fgets($readFromFile));

        if($user !== $_SESSION["user"]) {
            array_push($temp, $user);
            array_push($temp, $comment);
            array_push($temp, $time);
        }
        else{    
           if($time !== $_GET["time"]) {
                array_push($temp, $user);
                array_push($temp, $comment);
                array_push($temp, $time);
           }
        }
    }
        //$file = $_SESSION["commentFile"];
        //file_put_contents($_SESSION["commentFile"],'');
        $writeToFile = fopen($_SESSION["commentFile"], "w+") or die("Unable to open file!");
        for($x = 0; $x < count($temp); $x++) {
            if($x !== count($temp)-1) {
                $txt = $temp[$x] .PHP_EOL;
            }
            else {
                $txt = $temp[$x];
            }
                fwrite($writeToFile, $txt);
        }
          
        include $_SESSION["currentPage"];
?>