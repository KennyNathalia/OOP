<?php 

class Pikachu extends Pokemon {

	public function __construct($name){
		$energytype = 'Lightning';
		$hitpoints = 60;
		$health = 60;
		$attacks = array("Electric Ring", "Pika Punch");
		$weakness = "fire";
		$resistance = "fighting";
            parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
    }

}

?>