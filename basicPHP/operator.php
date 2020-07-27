<?php
	$x=20;
	$y=4;

	echo "Arthemtic Operator<br/>";
	
	echo "Addition :",$x+$y,"<br/>";
	echo "Substraction :",$x-$y,"<br/>";
	echo "Multiplication :".$x*$y."<br/>";
	echo "Division :".$x/$y."<br/>";
	echo "Modolus :".$x%$y."<br/>";
	echo "<hr/>";

	echo "Comparision Operator<br/>";
	
	var_dump($x<$y);
	var_dump($x<>$y);

	$a=2;
	$b=2.0;
	var_dump($a===$b);
	echo "<hr/>";

	echo $a," Increment => ",++$a,"<br/>";
	echo $b," Decrement => ",--$b;
	echo "<hr/>";

	$c=2;
	echo "Logical Operator<br/>";
	if(($a and $c)==2){
		echo "two are same";
	}
	else{
		echo "sorry......";
	}
	echo "<hr/>";
	echo "string comparator<br/>";

	$ab="hello";
	$cd="world";
	echo $ab.$cd;

	echo "<hr/>";
	echo("Array Operator<br/>");


	$q=array("a"=>"apple","b"=>"ball");
	$w=array("c"=>"cat","d"=>"dog");
	//Union
	print_r ($q+$w);

	//equality : returns true i
	echo "<br/>"
	var_dump($q==$w);



?>