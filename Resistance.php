<?php
	class Resistance{
		public $resistanceName;
		public $resistanceMultiplier;

		public function __construct($resistance, $multiplier){
				$this->resistanceName = $resistance;
				$this->resistanceMultiplier = $multiplier;

			}

			public function getResistanceName(){
				return $resistanceName;
			}

			public function getResistanceMultiplier(){
				return $resistanceMultiplier;
			}
		}
?>