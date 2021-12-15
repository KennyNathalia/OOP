<?php 

class Pikachu extends Pokemon {

	public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance){
		
            parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
    }
//[new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)]
//array("Pika Punch", "Electric Ring");
}

?>