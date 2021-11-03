<?php
	require "Pokemon.php";
	require "Pikachu.php";

	$pikachu = new Pikachu();

	$charmeleon = new Pokemon('Charmeleon', 'Fire', '60', 'Head Butt, Flare');

	print_r('<pre>'. $pikachu . '</pre>');
	// print_r('<pre>'. $charmeleon . '</pre>');
?>