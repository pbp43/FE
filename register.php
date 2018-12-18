<?php
error_reporting(-1);
ini_set('display_errors', true);

include ('client.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

//$encrpytpw = sha1 ($password);

$response = register($firstname,$lastname,$username,$password);
if($response === "false")
  {	$message =  " <b> <div style ='font:21px/21px tahoma;color:#ff0000'> The username $username already exists. <br> Please try again with a different username, redirecting you back to the signup page. </b></div> ";
$siteurl = "signup.html";
redirect ($message,$siteurl,10);	}

else if ($response === "true")
  {	$message =  " <b> <div style ='font:21px/21px tahoma;color:#00ff00'>  You have successfully registered with the username $username. <br> You will be redirected shortly.. </b></div>";

session_start();
$_SESSION["logged"] = true;
$_SESSION["username"] = $username;

$siteurl = "searchx.php";
redirect ($message,$siteurl,5); }
  
?>
