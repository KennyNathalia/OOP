<?php
	class Attack{
		public $attackName;
		public $attackDamage;

		public function __construct($attack, $damage){
				$this->attackName = $attack;
				$this->attackDamage = $damage;

			}

			public function getAttackName(){
				return $attackName;
			}

			public function getAttackDamage(){
				return $attackDamage;
			}
		}
?>