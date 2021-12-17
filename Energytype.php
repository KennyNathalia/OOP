<?php
	class Energytype{
		private $name;

		public function __construct ($name){
			$this->name = $name;
		}

		public function getEnergyTypeName(){
			return $this->name;
		}
	}

?>