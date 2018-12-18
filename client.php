
<?php
error_reporting(-1);
ini_set('display_errors', false);

require_once('../RabbitMQ/path.inc');
require_once('../RabbitMQ/get_host_info.inc');
require_once('../RabbitMQ/rabbitMQLib.inc');

function login($username,$password){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "login";
    $request['username'] = $username;
    $request['password'] = $password;
    $response = $client->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function register($firstname,$lastname,$username,$password){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "register";
    $request['firstname'] = $firstname;
    $request['lastname'] = $lastname;
    $request['username'] = $username;
    $request['password'] = $password;
    $request['message'] = $msg;
    $response = $client->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function search($item,$username){
    $client = new rabbitMQClient("testRabbitMQ.ini","apiServer");
    $client1 = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "search";
    $request['item'] = $item;
    $request['username'] = $username;
    $response = $client->send_request($request);
    $response1 = $client1->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function favFood($username,$item){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "favFood";
    $request['username'] = $username;
    $request['item'] = $item;
    $response = $client->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function deletefav($username,$item){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "deletefav";
    $request['username'] = $username;
    $request['item'] = $item;
    $response = $client->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function showfav($username){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "showfav";
    $request['username'] = $username;
    $response = $client->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function redirect ($message, $siteurl, $delay){ 
	echo "$message";
	header( "refresh:$delay; url = $siteurl");
	exit();
}


function recent($username){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "recent";
    $request['username'] = $username;
    $response = $client->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function track($item,$username){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "calorietrack";
    $request['item'] = $item;
    $request['username'] = $username;
    $response = $client->send_request($request);
    
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function trackresults($username){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "trackresults";
    $request['username'] = $username;
    $response = $client->send_request($request);
    
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function deletetracker($username){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "deletetracker";
    $request['username'] = $username;
    $response = $client->send_request($request);
    
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}

function attributesearch($item,$username){
    $client = new rabbitMQClient("testRabbitMQ.ini","apiServer");
    $client1 = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }

    $request = array();
    $request['type'] = "attributesearch";
    $request['item'] = $item;
    $request['username'] = $username;
    $response = $client->send_request($request);
    $response1 = $client1->send_request($request);
    //$response = $client->publish($request);

    //echo "client received response: ".PHP_EOL;
    //print_r($response);
    return $response;
    echo "\n\n";

    echo $argv[0]." END".PHP_EOL;
}
?>
