<?php
session_start() ;
include ('client.php');

$username = $_SESSION["username"];
//$item =$_SESSION["item"];
?>


<!DOCTYPE html>
<style>
	#header{
            min-height: 20px;
            background-color: #666699;
        }
        #menu{
            min-height: 40px;
            background-color: #999999;
        }
        #body{
            min-height: 125px;
            margin-top: 3%;
            background-color: #efefef;
        }
        #footer{
            min-height: 20px;
            margin-top: 3%;
            background-color: white;
        }
        #header, #menu, #body, #footer{
            margin-left: 10%;
            margin-right: 10%;
            
            box-shadow: 3px 5px 7px #666666;
            border: 1px solid black;
        }
        @viewport{
            zoom: 1.0;
            width: extend-to-zoom;
        }
        @-ms-viewport{
            width: extend-to-zoom;
            zoom: 1.0;
        }
</style>
<html lang="en">
<body>
<div id = "body">

<center>

<?php
$response = showfav($username);
echo $response;
?>


</center>
</div>
</body>


