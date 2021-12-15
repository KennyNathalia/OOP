<?php
	require "Pokemon.php";
	require "Pikachu.php";
	require "Charmeleon.php";
	require "Battle.php";

	$pikachu = new Pikachu("Pikachu", "Lightning", 60, 60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)], new Weakness("Fire", 1.5), new Resistance("Fighting", 20));

	$charmeleon = new Charmeleon("Charmeleon", "Fire", 60, 60, [new Attack("Head Butt", 10), new Attack("Flare", 30)], new Weakness("Water", 2), new Resistance("Lightning", 10));

	$pikachu->name();
	$charmeleon->name();

	//print_r('<pre>' . $pikachu . '</pre>');

	print_r('<pre>'. $pikachu->stats() . '</pre>');
 	print_r('<pre>'. $charmeleon->stats() . '</pre>');


 	//Pokebattle text
 	print_r($pikachu->name()." attacks ". $charmeleon->name()." with ". $pikachu->attack()[1]->getAttackName()."!". "<br>");
 	print_r("It did ". $pikachu->attack()[1]->getAttackDamage()." damage!". "<br>");

 	print_r("Charmeleon now has ". $charmeleon->health() + $pikachu->attack()[1]->getAttackDamage(). "<br>");

 	print_r($charmeleon->name()." attacks ". $pikachu->name()." with ". $charmeleon->attack()[1]->getAttackName()."!". "<br>");

 	print_r("It did ". $charmeleon->attack()[1]->getAttackDamage()." damage!". "<br>");

?>