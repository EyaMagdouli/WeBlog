<?php
    //connect to the datebase file
    require_once('includes/connect.php');
    //includes functions
    require_once('includes/functions.php');
    //the registration of the users file
    require_once('includes/signup_signin.php');
    //decalare functions in variables
    $posts=Posts();
    $infos=info();
    $blogs=blog();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>My Blog</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <!-- home, contact and about me -->
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="Blog.php"><?php foreach($blogs as $blog){ echo $blog['name']; }?>.com</a>
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
    <!-- sign in , sign up and logout buttons -->
    <ul class="navbar-nav ml-auto ">
        <form class="form-inline ">
            <div class="form-group">
                <a href="Signin.php"><button type="button" class="btn btn-outline-primary">Sign In</button></a>
            </div>
            <div class="form-group mx-sm-3">
                <a href="Signup.php"><button type="button" class="btn btn-outline-primary">Sign Up</button></a>
            </div>
        </form> 
    </ul>
</nav>
<div class="jumbotron text-center" >
        <h1 class="display-5"> <strong>Welcome in <a href="#"><?php echo $blog['name']; ?></a></strong></h1> 
    </div>
    <!-- page contecnt -->
    <div class="row">
    <div class="col-6">
    <div class="content">
    <h2 class="content-title">Recent Articles</h2>
        <?php foreach ($posts as $post)
        {
           ?> <img src="<?php echo 'img/post.jpg'.$post['image'];?>" alt="">
           <h3><?php echo $post['title']; ?> </h3>
           <p><?php echo $post['body'];?></p>
           <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
           <span><a href="post.php">See more..</a></span>
        <?php } ?>


		</div>
        </div>

    <aside class="col-6">
        <h2>About Me</h2>
        <div class="card">
            <div class="card-body">
                <h5><?php foreach($infos as $info){
                    if ($info['role']=='Admin'){
                    echo $info['username']; ?></h5>
                <p><?php echo $info['infromation'];} }?></p>
            </div>
        </div>
        <h2>About The Blog</h2>
        <div class="card">
            <div class="card-body">
                <h5><?php  echo $blog['name']; ?></h5>
                <p> <?php echo $blog['info']; ?></p>
        </div>

    </aside>
    </div>
    </div>

    <footer class="text-center">
<p>MyViewers &copy; <?php echo date('D/M/Y'); ?></p>
</footer>





<!-- Bootstrap with jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <script src="JS/Blog.js"></script>  
</body>
</html>