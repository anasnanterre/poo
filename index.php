<?php

	require './vendor/autoload.php';

	require './Personnage.php';


	$merlin = new Personnage("Merlin");
	$harry = new Personnage("harry");


	$merlin -> atk=100;

	$merlin -> attack($harry);

	echo $merlin->health;