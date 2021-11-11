<?php 

class Pikachu extends Pokemon {

	public function __construct($name){
		$energytype = 'Lightning';
		$hitpoints = 60;
		$health = 60;
		$attacks = [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)];
		$weakness = new Weakness("Fire", 1.5);
		$resistance = new Resistance("Fighting", 20);
            parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
    }
//[new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)]
//array("Pika Punch", "Electric Ring");
}

?>