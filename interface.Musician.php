<?php 

interface Musician {
	public function addInstrument(Instrument $instrument);
	public function getInstruments();


	public function assignToBand(Band $band);
	public function getMusicianType();
}