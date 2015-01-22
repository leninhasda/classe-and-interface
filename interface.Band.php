<?php 

interface Band {
	public function getName();
	public function getGenre();
	public function addMusician(Musician $musician);
	public function getMusicians();
}