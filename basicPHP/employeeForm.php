<!DOCTYPE html>
<html>
<head>
	<title>Employee Form</title>
	<style>
		.error{
			color: red;
		}
		th{
			text-align: left;
		}
	</style>
</head>
<body>
	<h2>Employment Application</h2>

	<?php
	$user=$website=$position=$level=$e=$comment="";

	//validating data
	function checking($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}


	//checkin with if condition wheather user submited form or not
	//by $_SERVER['REQUEST_METHOD']
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		//validating
	 		if((empty($_POST['user'])) || is_numeric(($_POST['user']))){
	 			echo "<span class=\"error\"> No numeric value is allowed.......";
	 		}
	 		elseif (!preg_match("/^[a-zA-z]*$/", $_POST['user'])){
	 			echo "<span class=\"error\"> Only Letters are allowed.</span>";
	 		}
	 		elseif((empty($_POST['website'])) ||  (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['website']))){
	 			echo "<span class=\"error\"> A Valid Website Required.</span>";
	 		}
	 	
	 		else{

		 	 	$user=checking($_POST['user']);
				$website=checking($_POST['website']);
				$position=checking($_POST['position']);
				$level=checking($_POST['level']);
				$e=checking($_POST['e']);
				$comment=checking($_POST['comment']);
	 		}



 	}


	?>

	<form name="employment" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<table width="600" cellspacing="2">
			<tr>
				<th>Name: </th>
				<td><input type="text" name="user" maxlength="50"></td>
			</tr>

			<tr>
				<th>Website: </th>
				<td><input type="text" name="website" maxlength="70"></td>
			</tr>

			<tr>
				<th>Position: </th>
				<td><select name="position">
					<option value="acc" selected="selected">Accountant</option>
					<option value="dev">Developer</option>
					<option value="bank">Banker</option>
				</select></td>
			</tr>

			<tr>
				<th>Experience level :</th>
				<td>
					<select name="level">
					<option value="entry" selected="selected">Entry Level</option>
					<option value="medium">Medium Level</option>
					<option value="high">High Level</option>
				</select></td>
			</tr>

			<tr>
				<th>Employement Status :</th>
				<td><input type="radio" name="e" checked="checked" value="employed">Emloyement
					<input type="radio" name="e" value="student">Student
					<input type="radio" name="e" value="unemployed">Unemployed</td>
			</tr>

			<tr>
				<th>Additional Comments :</th>
				<td>
					<textarea name="comment" cols="45" rows="5">
						
					</textarea>
				</td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset"></td>
			</tr>

		</table>
	</form>
	<h2>User Input</h2>
	<?php
	echo "Name: ".$user."<br/>";
	echo "Website: ".$website."<br/>";
	echo "Positon: ".$position."<br/>";
	echo "Employement Level: ".$level."<br/>";
	echo "Employement Status: ".$e."<br/>";
	echo "Additional Text: ".$comment;

	?>

</body>
</html>