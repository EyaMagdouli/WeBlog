<?php
require_once('includes/connect.php');
require_once('includes/signup_signin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Sign Up</title>
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
            margin-top:20px
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
            <form class="form-container" action="Signup.php" method="post">
            <?php require_once('includes/errors.php'); ?>
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password">Repeat Password:</label>
                    <input type="password" class="form-control password_repeat" name="password_repeat" placeholder="Repeat Password">
                </div>
                <span id='message'></span>
                <button type="submit" class="btn btn-outline-Secondary btn-block" name="signup_submit">Submit</button>
                <p>
                   <h6> Already a member ? <a href="Signin.php">Sign in</a></h6>
                </p>
            </form>
            </section>
        </section>
    </section>
</body>
</html>
