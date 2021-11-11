<?php
	require "Weakness.php";
	require "Resistance.php";
	require "Attack.php";

	class Pokemon{
		public $name;
		public $energytype;
		public $hitpoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resistance;


	public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

	public function __toString() {
	        return json_encode($this);
	}

	public function name(){
        //echo '<h2>' . $this->name . '</h2>';
        return $this->name;
    }

    public function type(){
    	return $this->energytype;
    }

    public function hitpoints(){
    	return $this->hitpoints;
    }

    public function attack(){
    	return $this->attacks;
    }

    // public function attack1(){
    // 	return $this->attacks[0];
    // }

    // public function attack2(){
    // 	return $this->attacks[1];
    // }

    public function getWeakness(){
    	return $this->weakness;
    }

    public function getResistance(){
    	return $this->resistance;
    }

    public function stats(){
    	return
    	"Name: ". $this->name(). "<br>".
    	"Energytype: ". $this->type()."<br>".
    	"Health (hitpoints): ". $this->hitpoints()."<br>".
    	"Attacks: ". $this->attack()[0]->getAttackName().", ".$this->attack()[0]->getAttackDamage(). " and ". $this->attack()[1]->getAttackName().", ".$this->attack()[0]->getAttackDamage()."<br>".
    	"Weakness: ". $this->getWeakness()->getWeaknessName(). ", ". $this->getWeakness()->getWeaknessMultiplier()."<br>".
    	"Resistance: ". $this->getResistance()->getResistanceName(). ", ". $this->getResistance()->getResistanceMultiplier();
    }

}
?>