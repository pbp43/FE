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
	font-size: 50px;
            min-height: 125px;
            margin-top: 3%;
            background-color: #efefef;
        }
        #footer{
            min-height: 20px;
            margin-top: 3%;
            background-color: #666699;
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
	<body>
<div id = "body">
    <html lang="en">


<?php
session_start();
error_reporting(-1);
ini_set('display_errors', true);

include ('client.php');
$username = $_SESSION["username"];
//$item =$_SESSION["item"];
$item = $_GET['item'];
$choice = $_GET['choice'];

echo ("Item - ");
echo ucfirst($item);
echo "<br>";

echo ("Choice - ");
echo ucfirst($choice);
echo "<br>";


$response = attributesearch($item,$username);
//print_r($response);
$iteminfo = $response['fields'];
if ($choice == "Cals")
	{
	//echo ($iteminfo['item_name']) ;
	$item =$iteminfo['item_name'];
	echo ("$item Calories - ");
	echo ($iteminfo['nf_calories']);
	}

if ($choice == "Carbs")
	{
	//echo ($iteminfo['item_name']) ;
	$item =$iteminfo['item_name'];
	echo ("$item Carbohydrates - ");
	echo ($iteminfo['nf_total_carbohydrate']);
	}

if ($choice == "Protein")
	{
	//echo ($iteminfo['item_name']) ;
	$item =$iteminfo['item_name'];
	echo ("$item Protein - ");
	echo ($iteminfo['nf_protein']);	
	}
if ($choice == "Sugar")
	{
	//echo ($iteminfo['item_name']) ;
	$item =$iteminfo['item_name'];
	echo ("$item Sugar - ");
	echo ($iteminfo['nf_sugars']);	
	}

$_SESSION['item'] = $item;

?>
</center>
</div>
</body>

