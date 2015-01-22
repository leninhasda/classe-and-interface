<?php 

class LeadGuitarist extends Guitarist {

	function __construct($first, $last) 
	{
		parent::__construct($first, $last);
		$this->setMusicianType("Lead Guitarist");
	}
}