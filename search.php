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

echo ("Item - ");
echo ucfirst($item);
echo "<br>";

$response = search($item,$username);
//print_r($response);

/*
echo ("Index - ");
echo ($response['_index']);
echo"<br>";

echo ("Type - ");
echo ($response['_type']) ;


echo ("Id - ");
echo $response['_id'];

echo"<br>";
echo ("Score - ");
echo $response['_score'];
*/


//print_r($response['fields']);
$iteminfo = $response['fields'];

echo ("Item ID - ");
echo ($iteminfo['item_id']);
echo"<br>";
echo ("Item Name - ");
echo ($iteminfo['item_name']) ;
$item =$iteminfo['item_name'];
echo"<br>";
echo ("Brand Name - ");
echo ($iteminfo['brand_name']);
echo"<br>";
echo ("$item Calories - ");
echo ($iteminfo['nf_calories']);
echo"<br>";
echo ("$item Sodium - ");
echo ($iteminfo['nf_sodium']);
echo"<br>";
echo ("$item Protein - ");
echo ($iteminfo['nf_protein']);
echo"<br>";
echo ("$item Sugar - ");
echo ($iteminfo['nf_sugars']);
echo"<br>";
echo ("$item Carbohydrates - ");
echo ($iteminfo['nf_total_carbohydrate']);
echo"<br>";
echo ("Serving Size Quantity - ");
echo ($iteminfo['nf_serving_size_qty']);
echo"<br>";
echo ("Serving Size Unit - ");
echo($iteminfo['nf_serving_size_unit']);
echo"<br>";

$_SESSION['item'] = $item;

?>



<body>

  <form class="fav" action="fav.php" style="margin:auto;max-width:600px">
  <input type="hidden"  name="item" id="item">
  <button type="submit">Add to favorties!</i></button>



</form>
</body>


<body>

  <form class="track" action="track.php" style="margin:auto;max-width:600px">
  <input type="hidden"  name="item" id="item">
  <button type="submit">Add to tracker</i></button>



</form>
</body>

</center>
</div>
</body>

