<?php




include("request.php");

$method = $_SERVER['REQUEST_METHOD']; 
		$protocol = $_SERVER['SERVER_PROTOCOL'];
		$ipRemote = $_SERVER['REMOTE_ADDR'];
		$ipServidor = $_SERVER['SERVER_ADDR'];
		//$this->resource = $resource;
		$parameters = $_SERVER['QUERY_STRING'];


$request = new Request($merhod, $protocol, $server_ip, $remote_ip, $resource, $params);
var_dump($request);


