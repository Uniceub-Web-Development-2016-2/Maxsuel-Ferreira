<?php


class Request{

	private $method;
	private $protocol;
	private $ip;
	private $remote_ip;
	private $resource;
	private $parameters;
	
	
	public function __construct($method, $protocol, $ip, $remote_ip, $resource, $parameters){
		$this->method = $method;
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->remote_ip = $remote_ip;
		$this->resource = $resource;
		$this->parameters = $parameters;	
	}
	

	public function toString(){
	  	$parameters = "";
		foreach($this->parameters as $key => $value){
			$parameters = $parameters . $key . "=" . $value . "&";
		}
		return $this->protocol . "://" . $this->ip  . "/" . $this->resource  . "?" . substr($parameters, 0, -1); 	
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

	private function get_remote_ip()
	{
		return $this->remote_ip = $remote_ip;
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
	
	private function get_Remote_ip($remote_ip)
	{
		$this->remote_ip = $remote_ip;
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

