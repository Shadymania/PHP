<!DOCTYPE html>
<html>
<head>
	<title>New Form</title>
	<link rel="stylesheet" type="text/css" href="newForm.css">
</head>
<body>
	<h2>Simple Form</h2>

	<?php 
		$fname=$lname=$email=$birth=$phone=$gender=$programming=$comment="";

		function checking($data){
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}


		if($_SERVER['REQUEST_METHOD']=="POST"){
			$fname=checking($_POST['fname']);
			$lname=checking($_POST['lname']);
			$email=checking($_POST['email']);
			$birth=checking($_POST['birth']);
			$phone="+977".checking($_POST['phone']);
			$gender=checking($_POST['gender']);
			$programming=checking($_POST['programming']);
			$comment=checking($_POST['comment']);
		}

	 ?>

	<form name="simple" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<label>First Name:</label>
		<input type="text" name="fname" max="50" placeholder="Enter FirstName" required="required">
		<br/>

		<label>Last Name: </label>
		<input type="text" name="lname" maxlength="50" placeholder="Enter Last Name" required="required">
		<br/>

		<label>Email: </label>
		<input type="email" name="email" placeholder="Enter Email" required="required">
		<br/>

		<label>DOBirth:</label>
		<input type="date" name="birth" placeholder="mm/dd/yyyy" required="required">
		<br/>

		<label>Telphone:</label>
		<input type="tel" name="phone" placeholder="+977" required="required">
		<br/>

		<label>Gender:</label>
		<input id="g" type="radio" name="gender" checked="checked" value="Male"/>Male
		<input id="g" type="radio" name="gender" value="Female"/>Female
		<input id="g" type="radio" name="gender" value="Others"/>Others
		<br/>

		<label>Programming: </label>
		<select name="programming">
			<option value="PHP">PHP</option>
			<option value="Python">PYTHON</option>
			<option value="Java">JAVA</option>
			<option value="Dart">DART</option>
			<option value="JavaScript">JAVASCRIPT</option>
		</select>

		<label>Comments:</label>
		<textarea name="comment" cols="45" rows="5" placeholder="Your Suggestions">
		</textarea>
		<br/><br/>
		<?php
			for($i=0;$i<5;$i++){
				echo "<br/>";
			}
		?>
		<input type="submit" name="submit" value="Register">
		<input type="reset" name="reset" value="Reset">

	</form>

	<?php
		echo "First Name: ".$fname."<br/>";
		echo "Last Name: ".$lname."<br/>";
		echo "Email: ".$email."<br/>";
		echo "DOBirth: ".$birth."<br/>";
		echo "Phone: ".$phone."<br/>";
		echo "Gender: ".$gender."<br/>";
		echo "Programming: ".$programming."<br/>";
		echo "Comment: ".$comment."<br/>";

	?>


</body>
</html>