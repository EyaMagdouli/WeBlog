<?php
//to track logged in users
session_start();
//initializing variables
$username="";
$email="";
$password="";
$password_repeat="";
$errors=array();
//include the connection to the database file
include('includes/connect.php');

// REGISTER USER
if (isset($_POST['signup_submit'])){    
   // receive all input values from the form
  $username = mysqli_real_escape_string($connect, $_POST['name']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  $password_repeat = mysqli_real_escape_string($connect, $_POST['password_repeat']);

}
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password)) { array_push($errors, "Password is required"); }
if ($password != $password_repeat) {
	array_push($errors, "The two passwords do not match");
  }

//checking the database
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($connect, $user_check_query);
$user = mysqli_fetch_assoc($result);

// a user does not already exist with the same username or email
if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // register user if there are no errors in the form
if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database(hashed password for security)

    $query = "INSERT INTO users (username, email,password) 
              VALUES('$username', '$email', '$password');";
    mysqli_query($connect, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: Blog.php');
}

//login user
if(isset($_POST['signin-submit'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($connect, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: Blog.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


?>



