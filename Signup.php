<?php
include('includes/cible.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            margin-top:5px
        }
        .error {
            width: 92%; 
            margin: 0px auto; 
            padding: 10px; 
            border: 1px solid #a94442; 
            color: #a94442; 
            background: #f2dede; 
            border-radius: 5px; 
            text-align: left;
            }
        .success {
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }  
    </style>
</head>
<body>
    <section class="container-fluid bg">
        <section class="row text-center">
            <section class="col-12">
            <form class="form-container" action="Signup.php" method="POST">
            <?php include('includes/errors.php'); ?>
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
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password">Repeat Password:</label>
                    <input type="password" class="form-control" name="password_repeat" placeholder="Repeat Password">
                </div>
                <button type="submit" class="btn btn-outline-Secondary btn-block" name="signup_submit">Submit</button>
            </form>
            </section>
        </section>
    </section>
<script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
</body>
</html>