<?php 

class Musicians {

	private $last;	
	private $first;	
	private $band;	
	private $type;	

	function __construct( $last, $first, $musicianType ) 
	{
		$this->last = $last;
		$this->first = $first;
		$this->type = $musicianType;
	}

	public function getName() 
	{ 
		return  $this->first . $this->last;
	}

	public function getBand()
	{
		return $this->band;
	}

	public function getMusicianType()
	{
		return $this->type;
	}

	public function setName( $first, $last )
	{
		$this->first = $first;
		$this->last = $last;
	}

	public function assignToBand( $band )
	{
		$this->bandName = $bandName;
	}

	public function setMusicianType( $musicianType )
	{
		$this->type = $musicianType;
	}
}