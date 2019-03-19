#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

//features
function doNutritionalInfo($request)
{
	//Get nutritional information from spoonacular
	return 0;
}

function doFavIngredients($request)
{
	//Get recipe according to favorite ingredients from spoonacular
	return 0;
}



function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['feature']))
  {
    return "ERROR: unsupported function";
  }
  switch ($request['feature'])
  {
    case "1":
      //call feature
      return $request; //return to front end as array
    case "2":
      return $request;
    case "3":
	return $request;
    case "4":
	return $request;
    case "5":
      return $request;
    case "6":
      return $request;
    case "7":
      return $request;
  }
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");
$server->process_requests('requestProcessor');

exit();
?>

