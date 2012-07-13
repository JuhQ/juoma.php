<?php
/*
 * This is a simple drinking game. Juoma means "a drink" in Finnish.
 * Rules are simple:
 *   - List players
 *   - List available drinks
 *   - The person with the highest number has to drink the drink provided by the game,
 *       player can decide portion size
 *   - If you puke or pass out, you lose
 *   - If a drink runs out, it must be removed from the drink list
 *   - Last one who's not thrown up or passed out, IS THE WINNER!
 *   - Do not die
 *   - Have fun
 *
 *  Juha Tauriainen @juha_tauriainen juha@bin.fi
 */

// list players here
$players = array("Juha", "Pekka", "Timo", "Liisa", "Maija");

// list drinks here
$drinks = array("Beer", "Koskenkorva", "Whiskey", "Milk");

foreach($players AS $player) {
	echo $player . " rolls " . mt_rand(0,100) . " for drink " . $drinks[mt_rand(0, count($drinks)-1)] . "\n";
} 
