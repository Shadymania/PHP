<?php
	
	$x=20;
	if($x==20){
		echo("hurray !!!<br/>");
	}
	else{
		echo "sorry";
	}

	$p=85;
	if($p==40){
		echo "you are passed";
	}
	elseif($p==60){
		echo "first division";
	}
	elseif(100>=$p && $p >=80){
		echo "distinction";
	}
	else{
		echo "fail";
	}

	echo "<br/>Switch Statement<br/>";
	$a="php";

	switch($a){
		case 'python':
			echo "Congrats python";
			break;

		case 'java':
			echo "congrats java";
			break;

		case 'php':
			echo "congrtas php";
			break;

		default:
		echo "doesn't match....";	

	}


?>