<?php 

class Charmeleon extends Pokemon {

    public function __construct($name){
        $energytype = 'Fire';
        $hitpoints = 60;
        $health = 60;
        $attacks = [new Attack("Head Butt", 10), new Attack("Flare", 30)];
        $weakness = new Weakness("Water", 2);
        $resistance = new Resistance("Lightning", 10);
            parent::__construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance);
    }

}

?>