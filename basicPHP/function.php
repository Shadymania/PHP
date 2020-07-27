<?php

	function display(){
		echo "hello php";
	}

	display();
	echo "<hr/>";

	echo "<hr/>function arguments";
	function mycar($car){
		echo $car."<br/>";
	}

	mycar("bmw");
	mycar("honda");


	echo "<hr/>default arguments";
	function ageType($a=20){
		echo "<br/>Age: $a";
	}
	ageType();
	ageType(29);
	ageType(40);

	echo "<hr/>return values";
	function add($x,$y){
		$z=$x+$y;
		return $z;
	}
	
	echo "<br/> Adding ".add(20,40);
	echo "<br/>Adding ".add(-10,2)
?>