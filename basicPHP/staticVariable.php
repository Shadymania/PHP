<?php
	function sub(){
		static $x=10;
		echo "$x";
		$x++;
	}

sub();
echo "<br/>";
sub();
echo "<br/>";
sub();




?>