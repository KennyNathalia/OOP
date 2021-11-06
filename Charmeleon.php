<?php 

class Charmeleon extends Pokemon {

    public function __construct($name){
        $energytype = 'Fire';
        $hitpoints = 60;
        $health = 60;
        $attacks = array("Head Butt", "Flare");
        $weakness = "Water";
        $resistance = "Lightning";
            parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
    }

}

?>