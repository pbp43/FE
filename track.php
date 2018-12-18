<?php
session_start() ;
include ('client.php');

$username = $_SESSION["username"];
$item =$_SESSION["item"];

// FOR TESTING PURPOSES 
//echo "$item";
//$item = $_GET["item"];
//echo "<br>$username<br>";
//echo "$item";

$response = track($item,$username);
if($response === "True")
  			{
    				$message = "$item has been added to $username's tracker list.";
    				$siteurl = "searchx.php";
    				redirect ($message,$siteurl,5);
			}

?>


