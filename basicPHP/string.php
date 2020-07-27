<?php
	$name="Aasis Gyawali is a good boy";
	echo($name)."<br/>";
	echo "Word Count : ".str_word_count($name)."<br/>";
	echo "Reverse : ".strrev($name);

	echo "<br/>".strpos("Aasis Gyawali is a", "is");

	echo "<br/>".str_replace("Gyawali", "Don", "Aasis Gyawali");

?>
