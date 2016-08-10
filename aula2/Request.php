<?php

class Request
{
	private $method;
	private $protocol;
	private $ip;
	private $resource;
	private $params;


	public function __construct($method,$protocol,$ip,$resource,$params)
	{
		
		$this->set_method($method);
		$this->set_protocol($protocol);
		$this->set_ip($ip);
		$this->set_resource($resource);
		$this->set_params($params);
	}

	public function toString()
	{
		$request = $this->protocol."://".$this->ip."/".$this->resourcee"?".$this->parameters;
		return $request;
	
	
	
	}

	
	
	
	

	private function get_method()
	{
		return $this->method;
	}
	
	private function get_protocol()
	{
		return $this->protocol;
	}
	
	private function get_ip()
	{
		return $this->ip = $ip;
	}
	
	private function get_resource()
	{
		return $this->params;
	}

	private function get_params()
	{
		return $this->params;
	}

	private function set_method($method)
	{
		$this->method = $method;
	}
	
	private function set_protocol($protocol)
	{
		$this->protocol = $protocol;
	}
	
	private function set_ip($ip)
	{
		$this->ip = $ip;
	}
	
	private function set_resource($resource)
	{
		$this->params = $params;
	}

	private function set_params($params)
	{
		$this->params = $params;
	}

















	
}
