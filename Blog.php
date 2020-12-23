<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Blog.css">
    <title>My Blog</title>
</head>
<body>
    
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
        <!-- home, contact and about me -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="travel.php">MyBlog.com</a>
            </li>
            <!-- dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Explore</a>
                 <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href="#">About Me</a>
                    <a class="dropdown-item" href="#">About The Blog</a>
                </div>
            </li> 
        </ul>  
        <!-- sign in and sign up -->
        <ul class="navbar-nav ml-auto ">
        <form class="form-inline ">
        <div class="form-group">
        <button type="button" class="btn btn-outline-primary">Sign In</button></div>
        <div class="form-group mx-sm-3">
        <button type="button" class="btn btn-outline-primary">Sign Up</button></div>
        </form> 
        </ul>
    </nav>
    <div class="jumbotron text-center" >
        <h1 class="display-5"> <strong>Welcome in <a href="#"> MyBlog.com</a></strong></h1> 
    </div>


<!-- Bootstrap with jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <script src="JS/Blog.js"></script>  
</body>
</html>