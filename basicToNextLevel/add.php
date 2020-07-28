	<?php 
	

	$email=$program=$description="";

	function checking($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	 ?>

	 <?php 
	
	  ?>

<!DOCTYPE html>
<html>
		<?php 
		include ('header.php');	
		?>
	
	<section class="container grey-text">
		<h4 class="center white" >PHP FORM</h4>
		<form class="grey" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<label>Your Email:</label>
			<input type="text" name="email">
			
			<label>Programming: </label>
			<input type="text" name="program">

			<label> Description:</label>
			<input type="text" name="description">	

			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0" >
			</div>		
		</form>

	</section>

	<?php include 'footer.php'; ?>

	<?php

	if(isset($_POST['submit'])){

		if ($_SERVER['REQUEST_METHOD']=='POST') {
			if(empty($_POST['email'])){
	 		echo "Empty Email Disallowed<br/>";
	 		}

	 		elseif( (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))){
	 		echo "Please enter validate email type";
	 		}
	 	
		 	elseif(empty($_POST['program'])){
		 		echo"Please enter the program<br/>";
		 	}
		 	elseif(empty($_POST['description'])){
		 		echo "Please enter some description.";
		 	}

		 	else{
		 		$email=checking($_POST['email']);
		 		$program=checking($_POST['program']);
		 		$description=checking($_POST['description']);

		 		echo "<hr/>User Input<br/>";
				echo "EMAIL ==> ".$email."<br/>";
				echo "PROGRAMMING ===> ".$program."<br/>";
				echo "Description ===> ".$description."<br/>";
		 	}
	 	}
	} 
 	?>

</html>