<?php
	class Resistance{
		private $resistanceMultiplier;
		private $resistanceType;

		public function __construct($multiplier, $resistanceEnergyType){
			$this->resistanceMultiplier = $multiplier;
			$this->resistanceType = $resistanceEnergyType;
		}

		public function getResistanceMultiplier(){
			return $this->resistanceMultiplier;
		}

		public function getResistanceType(){
			return $this->resistanceType;
		}
	}
?>