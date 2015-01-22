<?php 
require_once "interface.Band.php";
require_once "class.Musician.php";

class RockBand implements Band {

	private $bandName;	
	private $bandGenre;	
	private $musicians;	

	function __construct($bandName) 
	{
		$this->bandName = $bandName;
		$this->musicians = [];
		$this->bandGenre = "Rock";
	}

	public function getName() 
	{
		return $this->bandName;
	}

	public function getGenre() 
	{
		return $this->bandGenre;
	}

	public function addMusician(Musician $musician)
	{
		array_push($this->musicians, $musician);
		$musician->assignToBand($this);
	}

	public function getMusicians() 
	{
		return $this->musicians;
	}
}