<?php

	class Archer extends Personnage {


			public int $atk = 40;



	public function attack (Personnage $target){
		
		$target->health -= $this->atk * 2;
		if($target->isDead()){
		echo $target->name.' est mort.';
		}
		dump($target);


	}
	}