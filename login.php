
<?php
session_start();
error_reporting(-1);
ini_set('display_errors', true);

include ('client.php');
$username = $_GET['username'];
$password = $_GET['password'];

$date = date('Y-m-d H:i:s');

$response = login($username,$password);

if($response === "False")
  {
    $txt = "Login failed - (Username - $username ) || Date $date";
    $myfile= file_put_contents ('frontlog.txt',$txt.PHP_EOL,FILE_APPEND | LOCK_EX);
    echo "Login failed";
    header("Location: login.html");
    exit();
  }
  else if ($response === "True")
  {
	$txt = "Login Successful - (Username - $username ) || Date $date";
    	$myfile= file_put_contents ('frontlog.txt',$txt.PHP_EOL,FILE_APPEND | LOCK_EX);
	//session_start();
	$_SESSION['logged'] = true;
	$_SESSION['username'] = $username;
	//session_set_cookie_params($username,"",time() - 3600);
	header("Location: searchx.php");
  echo "Login succesful.";

                       exit();
  }
?>
