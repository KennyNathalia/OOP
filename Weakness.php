<?php
	class Weakness{
		private $weaknessName;
		private $weaknessMultiplier;
		private $weaknessType;

		public function __construct($weakness, $multiplier, $weaknessEnergyType){
			$this->weaknessName = $weakness;
			$this->weaknessMultiplier = $multiplier;
			$this->weaknessType = $weaknessEnergyType;

		}

		public function getWeaknessName(){
			return $this->weaknessName;
		}

		public function getWeaknessMultiplier(){
			return $this->weaknessMultiplier;
		}

		public function getWeaknesstype(){
			return $this->weaknessType;
		}

	}
?>