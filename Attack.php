<?php
	class Attack{
		private $attackName;
		private $attackDamage;

		public function __construct($attack, $damage){
			$this->attackName = $attack;
			$this->attackDamage = $damage;
		}

		public function getAttackName(){
			return $this->attackName;
		}

		public function getAttackDamage(){
			return $this->attackDamage;
		}

	}
?>