<?php
	class Resistance{
		protected $resistanceName;
		protected $resistanceMultiplier;
		protected $resistanceType;

		public function __construct($resistance, $multiplier, $resistanceEnergyType){
			$this->resistanceName = $resistance;
			$this->resistanceMultiplier = $multiplier;
			$this->resistanceType = $resistanceEnergyType;
		}

		public function getResistanceName(){
			return $this->resistanceName;
		}

		public function getResistanceMultiplier(){
			return $this->resistanceMultiplier;
		}

		public function getResistanceType(){
			return $this->resistanceType;
		}
	}
?>