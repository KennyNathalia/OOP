<?php
	class Resistance{
		public $resistanceName;
		public $resistanceMultiplier;

		public function __construct($resistance, $multiplier){
				$this->resistanceName = $resistance;
				$this->resistanceMultiplier = $multiplier;

			}

			public function getResistanceName(){
				return $this->resistanceName;
			}

			public function getResistanceMultiplier(){
				return $this->resistanceMultiplier;
			}
		}
?>