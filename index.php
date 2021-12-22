<?php
	require "Pokemon.php";
	require "Pikachu.php";
	require "Charmeleon.php";
	require "Energytype.php";

	$lightningType = new Energytype("Lightning");
	$fireType = new Energytype("Fire");
	$waterType = new Energytype("Water");
	$fightingType = new Energytype("Fighting");

	$pikachu = new Pikachu("Pikachu", $lightningType->getEnergyTypeName(), 60, 60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)], 
		new Weakness($fireType->getEnergyTypeName(), 1.5, $fireType->getEnergyTypeName()), 
		new Resistance($fightingType->getEnergyTypeName(), 20, $fightingType->getEnergyTypeName()));

	$charmeleon = new Charmeleon("Charmeleon", $fireType->getEnergyTypeName(), 60, 60, [new Attack("Head Butt", 10), new Attack("Flare", 30)], 
		new Weakness($waterType->getEnergyTypeName(), 2, $waterType->getEnergyTypeName()), 
		new Resistance($lightningType->getEnergyTypeName(), 10, $lightningType->getEnergyTypeName()));

	print_r('<pre>'. $pikachu->stats() . '</pre>');
 	print_r('<pre>'. $charmeleon->stats() . '</pre>');


 	//Pokebattle text
 	
 	//pikachu attacks charmeleon
 	print_r($pikachu->getName()." attacks ". $charmeleon->getName()." with ". $pikachu->getAttack()[1]->getAttackName()."!". "<br>");
 	print_r("It did ". $pikachu->attack($charmeleon, 1)." damage!". "<br>");
 	print_r($charmeleon->getName(). " now has ". $charmeleon->takeDamage($pikachu->attack($charmeleon, 1))." HP!". "<br>"."<br>");


	//charmeleon attacks pikachu
 	print_r($charmeleon->getName()." attacks ". $pikachu->getName()." with ". $charmeleon->getAttack()[1]->getAttackName()."!". "<br>");
 	print_r("It did ". $charmeleon->attack($pikachu, 1)." damage!". "<br>");
 	print_r($pikachu->getName(). " now has " .$pikachu->takeDamage($charmeleon->attack($pikachu, 1))." HP!". "<br>");

 	print_r("There are ". Pokemon::getPopulation(). " Pokemon alive");

?>