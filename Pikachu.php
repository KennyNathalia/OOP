<?php 

class Pikachu extends Pokemon {

	public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance){
            parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
    }
}

?>