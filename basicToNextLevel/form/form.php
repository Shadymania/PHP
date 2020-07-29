	<?php 
		$fname=$lname=$program=$email=$password="";
		$error=array('fname'=>'','lname'=>'','program'=>'','email'=>'','password'=>'');
	 ?>

	<?php 
		include ('header.php');
		
	 ?>

	 	<div>

	 <?php
	 echo "<br/><br/>";
	 	$fname=$lname=$email=$program=$password=''; 
	 	function checking($data){
	 		$data=trim($data);
	 		$data=stripslashes($data);
	 		$data=htmlspecialchars($data);
	 		return $data;
	 	}

	 	if(isset($_POST['submit'])){
	 		if($_SERVER['REQUEST_METHOD']=='POST'){

	 			if(empty($_POST['fname'])){

	 				$error['fname']="You cannot leave your first name empty";
	 				
	 				// echo  '<div class="alert alert-danger">
	   			// 				 <strong>Sorry!</strong> You cannot leave your name empty.</div>';
	 			}
	 			elseif( empty($_POST['lname'])){
					$error['lname']="You cannot leave your last name empty";
	 				}
   							
   				elseif(is_numeric($_POST['fname']) || is_numeric($_POST['lname'])){
   				 	echo '<div class="alert alert-danger">
   				 			 <strong>Sorry!</strong> Name Cannot Be Numeric.</div>';
   				 	}

   				elseif (empty($_POST['program'])) {
   					$error['program']="Program Cannot Be Empty";
   				 			// echo '<div class="alert alert-danger">
   				 			//  <strong>Sorry!</strong> Program Cannot Be Empty</div>';
   				 		} 	
   				 elseif (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $_POST['program'])) {
   				 		$error['program']="Only letters, comma and space are allowed.";		
   				 			}			

   				elseif (empty($_POST['email'])) {
   					$error['email']="Sorry! Email Cannot Be Empty.";
   				 			// echo '<div class="alert alert-danger">
   				 			//  <strong>Sorry!</strong> Email Cannot Be Empty.</div>';
   				 		}

   				elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
   					$error['email']=" Please enter valid email type";
   						// echo '<div class="alert alert-danger">
   				 	// 		 <strong>Sorry!</strong> Please enter valid email type</div>';
   						}

   				elseif (empty($_POST['password'])) {
   					$error['password']="Password Cannot Be Empty";
   				 		 			
   				 		 	// echo '<div class="alert alert-danger">
   				 			 // 		<strong>Sorry!</strong> Password Cannot Be Empty.</div>';
   				 		 		} 		 		

	 			else{
	 				$fname=checking($_POST['fname']);
	 				$lname=checking($_POST['lname']);
	 				$program=checking($_POST['program']);
	 				$email=checking($_POST['email']);
	 				$password=checking(md5($_POST['password']));

	 				echo "<hr/>Output are<br/>";
	 				echo "First Name: ".$fname."<br/>";
	 				echo "Last Name: ".$lname."<br/>";
	 				echo "Program: ".$program."<br/>";
	 				echo "Email : ".$email."<br/>";
	 				echo "Password: ".$password."<br/>";
	 			}


	 		}


	 		if(array_filter($error)){
	 			// echo 'error are in the form';	
	 		}	
	 		else{
	 			//form is valid and take to the index.php
	 			header ('Location:index.php');
	 		}

	 	}
	  ?>
	</div>



	

	 

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="joker.jpg" title="Profile" id="img" class="mt-5" style="height: 150px">
				<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
					<div class="form-group">
						<label for="fname">First Name:</label>
						<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First Name" value="<?php echo htmlspecialchars($fname);?>" >
					</div>
					<div class="alert-danger"><?php echo $error['fname']; ?></div>

					<div class="form-group">
						<label for="lname">Last Name:</label>
						<input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Your Last Name">
					</div>
					<div class="alert-danger"><?php echo $error['lname']; ?></div>

					<div class="form-group">
						<label for="program">Programming:</label>
						<input type="text" name="program" id="program" class="form-control" placeholder="Python, PHP, Java" value="<?php echo htmlspecialchars($program); ?>">
					</div>
					<div class="alert-danger"><?php echo $error['program']; ?></div>


					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" id="email" class="form-control" placeholder="example@gmail.com">
					</div>
					<div class="alert-danger"><?php echo $error['email']; ?></div>

					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
					</div>
					<div class="alert-danger"><?php echo $error['password']; ?></div>

					<input type="submit" name="submit" value="Submit" class="btn btn-success" id="btn">

					<input type="reset" name="reset" value="Reset" class="btn btn-primary" id="btn">

				</form>

	
			</div>
		</div>
	</div>




	<?php 
		include 'footer.php';
	 ?>
