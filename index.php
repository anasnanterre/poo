<?php

	require './vendor/autoload.php';



 spl_autoload_register("my_autoload");

function my_autoload($className){
require './'.$className.'.php';

}

	$merlin = new Personnage("Merlin");
	$harry = new Personnage("harry");
	$robbin = new Archer("Robbin");

dump($robbin);


	$merlin -> atk=100;

	$robbin -> attack($merlin);

	echo $merlin->health;