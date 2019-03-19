#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

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
      //feature code
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

