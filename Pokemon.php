<?php
	class Pokemon{
		public $name;
		public $energytype;
		public $hitpoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resistance;

		public function __construct($name, $energytype, $hitpoints, $attacks){
	        $this->name = $name;
	        $this->energytype = $energytype;
	        $this->hitpoints = $hitpoints;
	        $this->attacks = $attacks;
	    }

	    public function __toString() {
		        return json_encode($this);
		}
	}
?>