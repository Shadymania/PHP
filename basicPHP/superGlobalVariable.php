<?php 

	echo "global variable<br/>";
	$x=100;
	$y=400;

	function add(){
		global $x,$y,$z;
		$z=$x+$y;
	}
	add();
	echo $z;


	echo "<br/>Super Variable <br/>";
	echo $_SERVER["PHP_SELF"];
	echo "<br/>";
	echo $_SERVER['SERVER_NAME'];


 ?>