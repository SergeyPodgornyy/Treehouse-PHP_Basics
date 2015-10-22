<?php

interface Rideable{
	public function howToRide();
}

class Skateboard implements Rideable{
	public function howToRide(){
		$steps = array();
		$steps[] = "Balance your front foot on the board";
		$steps[] = "Kick, then push with the other foot.";
		$steps[] = "Don't fall down!";
		return $steps;
	}
}

function echo_steps($key, $value){
	echo $value;
}

$skateboard = new Skateboard();

//print_r($skateboard->howToRide());

$skateboard_info = $skateboard->howToRide();

foreach($skateboard_info as $step){
	echo $step."<br>";
}

?>