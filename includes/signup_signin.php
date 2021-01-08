<?php
//variable declaration
$username="";
$email="";
$password="";
$password_repeat="";
$errors=array();
//include the connection to the database file
require_once('connect.php');
// REGISTER USER
if (isset($_POST['signup_submit'])){    
    // receive all input values from the form
      $username =$_POST['name'];
      $email = $_POST['email']; 
      $password =$_POST['password'];
      $password_repeat = $_POST['password_repeat'];
      	// form validation: ensure that the form is correctly filled
		if (empty($username)) {  array_push($errors, "Write your username please"); }
		if (empty($email)) { array_push($errors, "Write your email please"); }
		if (empty($password)) { array_push($errors, "write your password please"); }
		if ($password!=$password_repeat) { array_push($errors, "The two passwords do not match");}
        // Ensure that no user is registered twice. 
        $user_check_query = "SELECT * FROM users WHERE username='$username'OR email='$email' LIMIT 1";

		$result = mysqli_query($connect, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { // if user exists
			if ($user['username'] === $username) {
			  array_push($errors, "Username already exists");
			}
			if ($user['email'] === $email) {
			  array_push($errors, "Email already exists");
			}
        }
        
        // register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password');";
			mysqli_query($connect, $query);

			// get id of created user
			$user_id = mysqli_insert_id($connect); 

			// put logged in user into session array
			$_SESSION['user'] = getUserById($user_id);

			// if user is admin, redirect to admin area
			if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
				// redirect to admin area
				header('location:admin/dashboard.php');
				exit(0);
			    } else {
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				header('location: welcome.php');				
				exit(0);
			}
		}
    }

// LOG USER IN
if (isset($_POST['signin_submit'])) {
		$username = $_POST['name'];
		$password = $_POST['password'];

		if (empty($username)) { array_push($errors, "Username required"); }
		if (empty($password)) { array_push($errors, "Password required"); }
		if (empty($errors)) {
			$password = md5($password); // encrypt password
			$query = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) > 0) {
				// get  id of created user
				$user_id = mysqli_fetch_assoc($result)['id']; 

				// put logged in user into session array
				$_SESSION['user'] = getUserById($user_id); 

				// if user is admin
				if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
					$_SESSION['message'] = "You are now logged in";
					// go to the admin user interface
					header('location:admin/dashboard.php');
					exit(0);
				} else {
					$_SESSION['message'] = "You are now logged in";
					// go to the normal user interface
					header('location:welcome.php');				
					exit(0);
				}
			} else {
				array_push($errors,'make sure you\'re writing the correct username and password');
			}
		}
	}
	// escape value from form
	/*function esc(String $value)
	{	
		// bring the global db connect object into function
		global $connect;

		$val = trim($value); // remove empty space sorrounding string
		$val = mysqli_real_escape_string($connect, $value);

		return $val;
	}*/
	// Get user info from user id
	function getUserById($id)
	{
		global $connect;
		$query= "SELECT * FROM users WHERE id=$id LIMIT 1";
		$result = mysqli_query($connect,$query);
		$user = mysqli_fetch_assoc($result);

		// returns user in an array format: 
		return $user; 
        }
