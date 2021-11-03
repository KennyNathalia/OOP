<?php
	class Pikachu extends Pokemon{
		
	public function __construct(){
			$name = "Pikachu";
			$energytype = "Lightning";
			$hitpoints = 60;
			$attacks = array("Electric Ring", "Pika Punch");
            parent::__construct($name, $energytype, $hitpoints, $attacks);
    }

	}
?>