<?php
		
	//case sensitive
	define("CAR", "BMW");
	echo CAR;

	//Case In-sensitive
	define("CAR", "SUZUKI",true);
	echo "<br/>".car;

	//acts as a global variable
	define("pi",3.14);

	 function abc(){
		echo "<br/>".pi;
	}

	abc();


?>