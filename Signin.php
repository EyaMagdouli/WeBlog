<?php
require_once('includes/connect.php');
require_once('includes/signup_signin.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<title>Sign in</title>
    <style>
        .bg{
            background:url("img/back.png") no-repeat;
            width:100%;
            height:100vh;
            background-size:100%;
        }
        .form-container{
            background:#fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px blue;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            vertical-align: middle;
            margin-top:100px
        }  
        .error {
	color: #a94442; 
	background: #f2dede; 
	border: 1px solid #a94442; 
	margin-bottom: 20px;
}
.validation_errors p {
	text-align: left;
	margin-left: 10px;
}
    </style>
</head>
<body>
    <section class="container-fluid bg">
        <section class="row text-center">
            <section class="col-12">
            <form class="form-container" action="" method="POST">
            <?php require_once('includes/errors.php'); ?>
            <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-Secondary btn-block" name="signin_submit">Submit</button>
                <p>
                   <h6> Not a member yet? <a href="Signup.php">Sign up</a></h6>
                </p>
            </form>
            </section>


</body>
</html>