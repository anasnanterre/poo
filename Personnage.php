<?php

class Personnage{

	public string $name;
	public int $health = 100;
	public int $atk = 20;


	public function __construct($name){
		$this->name = $name;


	}

	public function attack (Personnage $target){
		
		$target->health -= $this->atk;
		if($target->isDead()){
		echo $target->name.' est mort.';
		}
		dump($target);


	}

	public function isDead () : bool
	{
		return $this->health <= 0;

	}

}