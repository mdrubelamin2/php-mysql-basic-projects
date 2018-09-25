<?php

	// Class Syntax
	class Car{
		var $wheels = 4;
		var $hood = 1;
		var $engine = 1;
		var $doors = 4;
		function MoveWheels(){
			$this->wheels = 10;
		}
	}

	// BMW is a object
	$bmw = new Car();
	$bmw->MoveWheels();
	// $bmw -> wheels=8;

	// Object Insitiance
	echo $bmw->wheels;
?>