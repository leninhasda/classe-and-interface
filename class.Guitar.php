<?php 

require_once "interface.Instrument.php";

class Guitar implements Instrument {

	private $name;
	private $category;

	function __construct($name) 
	{
		$this->name = $name;
		$this->category = "guitar";
	}

	public function getName() 
	{
		return $this->name;
	}

	public function getCategory() 
	{
		return $this->category;
	}
}