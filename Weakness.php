<?php
	class Weakness{
		public $weaknessName;
		public $weaknessMultiplier;

		public function __construct($weakness, $multiplier){
			$this->weaknessName = $weakness;
			$this->weaknessMultiplier = $multiplier;

		}

		public function getWeaknessName(){
			return $this->weaknessName;
		}

		public function getWeaknessMultiplier(){
			return $this->weaknessMultiplier;
		}

	}
?>