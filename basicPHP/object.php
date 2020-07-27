<?php
	
	class Person {
		public $name;
		public  $age;
		public  $ph;

		public function Person($name,$age,$ph){
			$this->name=$name;
			$this->age=$age;
			$this->age=$age;

		}
	// public function __construct($name,$age,$ph){
	// 	$this->name=$name;
	// 	$this->age=$age;
	// 	$this->ph=$ph;
	// }

	public function display(){
		return "Name : ".$this->name."<br/>"."Age : ".$this->age."<br/>"."Phone Number : ".$this->ph;
	}
}

	$person1=new Person("ABC",30,9821921921);
	$person2=new Person("XYZ",21,1313198911);

	echo $person1->display();
	echo "<br/><br/>".$person2->display();


?>