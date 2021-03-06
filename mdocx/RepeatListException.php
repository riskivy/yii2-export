<?php

namespace riskivy\export\mdocx;

class RepeatListException extends \Exception {
	private $name = null;
	private $key = null;
	
	function __construct($name,$key){
		$this->name = $name;
		$this->key = $key;
	}
	
	public function getKey(){
		return $this->key;
	}
	
	public function getName(){
		return $this->name;
	}
}