<?php
	class Weakness{
		private $weaknessMultiplier;
		private $weaknessType;

		public function __construct($multiplier, $weaknessEnergyType){
			$this->weaknessMultiplier = $multiplier;
			$this->weaknessType = $weaknessEnergyType;

		}

		public function getWeaknessMultiplier(){
			return $this->weaknessMultiplier;
		}

		public function getWeaknesstype(){
			return $this->weaknessType;
		}

	}
?>