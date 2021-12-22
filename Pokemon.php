<?php
	require "Weakness.php";
	require "Resistance.php";
	require "Attack.php";

	class Pokemon{
		//variables
		private $name;
		private $energytype;
		private $hitpoints;
		private $health;
		private $attacks;
		private $weakness;
		private $resistance;
        private static $population = 0;


	public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$population++;
    }

	public function __toString() {
	   return json_encode($this);
	}

	public function getName(){
        return $this->name;
    }

    public function getType(){
    	return $this->energytype;
    }

    public function getHitpoints(){
    	return $this->hitpoints;
    }

    public function getAttack(){
    	return $this->attacks;
    }

    public function getWeakness(){
    	return $this->weakness;
    }

    public function getResistance(){
    	return $this->resistance;
    }

    public function attack($opponent, $attackIndex){
        $attack = $this->getAttack()[$attackIndex];
        $damage = $attack->getAttackDamage();
        if($this->energytype == $opponent->getWeakness()->getWeaknessType()){
            return $damage = $damage * $opponent->getWeakness()->getWeaknessMultiplier();
        }
        if($this->energytype == $opponent->getResistance()->getResistanceType()){
            return $damage = $damage - $opponent->getResistance()->getResistanceMultiplier();
        }
        $opponent->takeDamage($damage);
    }

    public function takeDamage($damage){
        $this->health = $this->health - $damage;      
        if ($this->health <= 0) {
            $this->health = 0;
            self::$population--;
        }
        return $this->health;
    }




    public function stats(){
    	return
    	"Name: ". $this->getName(). "<br>".
    	"Energytype: ". $this->getType()."<br>".
    	"Health (hitpoints): ". $this->getHitpoints()."<br>".
    	"Attacks: ". $this->getAttack()[0]->getAttackName().", ".$this->getAttack()[0]->getAttackDamage(). " and ". $this->getAttack()[1]->getAttackName().", ".$this->getAttack()[0]->getAttackDamage()."<br>".

    	"Weakness: ". $this->getWeakness()->getWeaknessName(). ", ". $this->getWeakness()->getWeaknessMultiplier(). ", ". $this->getWeakness()->getWeaknessType()."<br>".

    	"Resistance: ". $this->getResistance()->getResistanceName(). ", ". $this->getResistance()->getResistanceMultiplier(). ", ". $this->getResistance()->getResistanceType();
    }

    public static function getPopulation(){
    	return self::$population;
    }

}
?>

