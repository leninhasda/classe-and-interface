<?php 

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "class.RockBand.php";
require_once "class.Guitar.php";
require_once "class.Guitarist.php";
require_once "class.LeadGuitarist.php";


$band = new RockBand("The Variables");

$bandMemberA = new Guitarist("Jack", "Float");
$bandMemberB = new LeadGuitarist("Jim", "Integer");


$bandMemberA->addInstrument( new Guitar( "Gibson Les Paul" ) );
$bandMemberB->addInstrument( new Guitar( "Fender Stratocaster" ) );
$bandMemberB->addInstrument( new Guitar( "Hondo -77" ) );


$band->addMusician( $bandMemberA );
$band->addMusician( $bandMemberB );


foreach ( $band->getMusicians() as $musician ) 
{
	echo "Musician ".$musician->getName()."<be>";
	echo "is the ".$musician->getMusicianType()."<br>";
	echo "in the ".$musician->getBand()->getGenre()." Band<br>";
	echo "called ".$musician->getBand()->getName()."<br>";

	foreach ( $musician->getInstruments() as $instrument ) 
	{
		echo "and plays the ".$instrument->getName()." ";
		echo $instrument->getCategory()."<br>";
	}
	echo "<hr>";
}