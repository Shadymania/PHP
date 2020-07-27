<?php
	
	echo " Index Array";

	$colors=array("blue","red","pink");
	echo "<br/>Colors are<br/>".$colors[0]."<br/>".$colors[1]."<br/>".$colors[2];
	echo "<br/> SIZE OF ARRAY : ",count($colors);
	// print_r($colors);


	echo "<br/>Loop through an indexed array<br>";
	for ($i=0; $i<count($colors);$i++){
		echo "<br/>".$colors[$i];
	}

	echo "<hr/> Associative Array<br/>";
	$assoc=array("a"=>"apple","b"=>"ball","c"=>"cat");
	echo "using foreach loop<br/>";
	foreach($assoc as $value){
		echo "$value"."<br/>";
	}

	echo "Loop through as associative array<br/>";
	foreach($assoc as $k=>$value){
		echo "$k =>"." $value"."<br/>";
	}

	echo "<hr/> Multidemension Array<br/>";
	$grades=array(
		array("ram","51","80"),
		array("sanket","50","60"),
		array("aasis","90","95")
	);
	echo $grades[0][0].$grades[0][1].$grades[0][2]."<br/>";
	echo $grades[1][0].$grades[1][1].$grades[1][2];

?>