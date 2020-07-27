<?php
	$a="Hello Hello";
	echo "$a";

	$i=40;
	echo "<br/>Integer = ".$i;


	$f=50.257;
	echo "<br/>Float = ".$f;

	$isHappy=true;
	echo "<br/>Value: " ,$isHappy,"<br/>";
	echo var_dump($isHappy);

	$list=array("A"=>"Apple",
				"B"=>"Ball"
				,"C"=>"Cat",
				"D"=>"Dog",
				"E"=>"Egg",
				"F"=>"Fish");
	echo "<br/>";
	var_dump($list);
	echo "<br/>".count($list);

	$val=null;
	echo "<br/>";
	echo var_dump($val);
	

?>