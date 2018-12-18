<?php
	session_start();


	error_reporting(E_ALL);	
	ini_set('display_errors',1);
	ini_set('log_errors',1);
	require_once "Mobile_Detect.php";

	if (isset($_SESSION['logged']) && $_SESSION['logged'] == true){
		echo $_SESSION['username']; 
		
	}
	
	else{
		header("Location: login.html");
	}


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
            min-height: 130px;
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
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Welcome.. what would you like to do?</title>     
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale = 1, user-scalable=0">   

</head>

<div id = "footer">
<center>
<img hspace="10" src="searchpic.png" width="75%" height="auto">
</center>
</div>

<body>
<center>
<div id = "body">
<div style="text-align:right; width:90%; padding:10;">
<button type="button" style= "align=right" onclick="location.href='login.html'">Logout</button>
</div>
<p>Welcome.. what would you like to do?</p> <br>

<form class="search" action="search.php" style="margin:auto;max-width:600px">
<input type="text" placeholder="Enter food name" name="item" id="item">
 <button type="submit">Search for an item</i></button>
</form>

<form class ="attribute" action ="attributesearch.php" style="margin:auto;max-width:600px">
<input type ="text" placeholder = "Enter food name" name ="item" id="item">
<select name = "choice" id="choice" required>
	<option value =""> *PICK* </option>
	<option value ="Cals"> Calories </option>
	<option value ="Carbs"> Carbs </option>
	<option value ="Protein"> Protein </option>
	<option value ="Sugar"> Sugar </option>
</select>
<button type = "submit"> Search by attribute </i> </button>  <br>
</form>

<form class="deletefav" action="deletefav.php" style="margin:auto;max-width:600px">
<input type="text" placeholder="Remove food from favorite" name="item" id="item">
<button type="submit">Delete from favorites</i></button>
</form>

<form class="showfav" action="showfav.php" style="margin:auto;max-width:600px">
<button type="submit">SEE FAVORITES</i></button>
</form>

<form class="recent" action="recent.php" style="margin:auto;max-width:600px">
<button type="submit">SEE RECENT SEARCHES</i></button>
</form>

<form class="tracker" action="trackresults.php" style="margin:auto;max-width:600px">
<button type="submit">SHOW CALORIE TRACKER</i></button>
</form>

<form class="deletetrack" action="deletetracker.php" style="margin:auto;max-width:600px float:right" >
<button type="submit">DELETE TRACKER</i></button>
</form>


</center>
</div>

<div id = "footer">
<center>
<img hspace="10" src="searchpic.png" width="75%" height="auto">
</center>
</div>
 
</body>





