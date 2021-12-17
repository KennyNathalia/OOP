<?php
	require "Pokemon.php";
	require "Pikachu.php";
	require "Charmeleon.php";
	require "Battle.php";
	require "Energytype.php";

	$lightningType = new Energytype("Lightning");
	$fireType = new Energytype("Fire");
	$waterType = new Energytype("Water");
	$fightingType = new Energytype("Fighting");

	$pikachu = new Pikachu("Pikachu", $lightningType, 60, 60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)], new Weakness($fireType, 1.5, "test"), new Resistance($fightingType, 20, "test"));

	$charmeleon = new Charmeleon("Charmeleon", $fireType, 60, 60, [new Attack("Head Butt", 10), new Attack("Flare", 30)], new Weakness($waterType, 2, "test"), new Resistance($lightningType, 10, "test"));

	print_r('<pre>'. $pikachu->stats() . '</pre>');
 	print_r('<pre>'. $charmeleon->stats() . '</pre>');


 	//Pokebattle text
 	//$pikachu->attack($charmeleon, 0)

 	print_r($pikachu->name()." attacks ". $charmeleon->name()." with ". $pikachu->getAttack()[1]->getAttackName()."!". "<br>");
 	print_r("It did ". $pikachu->getAttack()[1]->getAttackDamage()." damage!". "<br>");


 	print_r($charmeleon->name()." attacks ". $pikachu->name()." with ". $charmeleon->getAttack()[1]->getAttackName()."!". "<br>");

 	print_r("It did ". $charmeleon->getAttack()[1]->getAttackDamage()." damage!". "<br>");

?>