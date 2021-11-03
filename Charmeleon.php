<?php
    class Charmeleon extends Pokemon{

    public function __construct(){
            $name = "Charmeleon";
            $energytype = "Fire";
            $hitpoints = 60;
            $attacks = array("Head Butt", "Flare");
            parent::__construct($name, $energytype, $hitpoints, $attacks);
    }

    }


?>