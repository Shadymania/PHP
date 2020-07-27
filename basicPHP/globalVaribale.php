<?php

$x=10;
$y=20;


function add(){
	global $x,$y;
	$z=$x+$y;
	echo 'Adding using global Varibale: ', "$x"+"$y";
	echo "<br/>Addition : ".$z;
}

add();
?>