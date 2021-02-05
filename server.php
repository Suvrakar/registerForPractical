<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$menu = mysqli_real_escape_string($db, $_POST['menu']);
		
		
		
	
		

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "SID is required"); }
		if (empty($menu)) { array_push($errors, "Select slot is required"); }

		
		
		
		//Checking same username
		 if(!$errors) {
            $sql="select * from users where (username='$username' or email='$email');";
            $res=mysqli_query($db,$sql);
            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['username'])
            {

                $message = "$username already exists. Your new time slot will be updated!";
					echo "<script type='text/javascript'>alert('$message');</script>";
		
				$update= "UPDATE users
					SET menu='$menu'
					WHERE username='$username'";
		
				mysqli_query($db, $update);
            }
			
		
			
            elseif($email==$row['email'])
            {
                $message = "$email already exists. Your new time slot will be updated!";
					echo "<script type='text/javascript'>alert('$message');</script>";
					
					
					$updates= "UPDATE users
					SET menu='$menu'
					WHERE email='$email'";
		
				mysqli_query($db, $updates);
            }
        }else { 
            echo "Successful";
        }
		
		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password =$password_1;
			$query = "INSERT INTO users (username, email, password, menu) 
					  VALUES('$username', '$email', '$password', '$menu')";
			mysqli_query($db, $query);

			
		}
		
		

			
		}

	}
	


?>