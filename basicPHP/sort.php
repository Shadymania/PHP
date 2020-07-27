<?php 
	
	$color=array("red","blue","green","yellow","amber","pink","yellowish");
	sort($color);

	foreach($color as $c){
		echo "$c<br/>";
	}

	rsort($color);
	echo "<br/><hr/> Reverse Sorting Again<br/>";
	foreach($color as $s){
		echo "$s<br/>";
	}
	echo sort($color);

	echo "<hr/><br/> Sorting in Associative Array<br/>";
	$singer=array("1"=>"Pearl Jam","2"=>"Soundgarden","3"=>"Led Zeppling");
	asort($singer);
	foreach($singer as $k=>$s){
		echo "$s ===> $k<br/>";
	}

	 ?>